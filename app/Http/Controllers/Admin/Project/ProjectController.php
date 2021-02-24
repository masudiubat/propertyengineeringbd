<?php

namespace App\Http\Controllers\Admin\Project;

use App\Project;
use App\ProjectGallery;
use App\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('pages.admin.projects.project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectCategories = ProjectCategory::all();
        return view('pages.admin.projects.project.create', ['projectCategories' => $projectCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Project name field is blank.',
        ]);

        $lastPhotoId = Project::select('id')->orderBy('id', 'DESC')->first();

        if ($lastPhotoId != null) {
            $newPhotoId = $lastPhotoId->id + 1;
        } else {
            $newPhotoId = 1;
        }


        // Code for Insert featured photo
        if ($request->has('image')) {

            $image = $request->file('image');

            $newImageName = "project_featured_" . $newPhotoId . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'storage/images/project-featured';
            $path = $request->file('image')->storeAs($destinationPath, $newImageName);
        }

        $project = new Project();

        if ($request->has('name')) {
            $project->name = $request->input('name');
        }

        if ($request->has('client_name')) {
            $project->client_name = $request->input('client_name');
        }

        if ($request->has('client_mobile')) {
            $project->client_mobile = $request->input('client_mobile');
        }

        if ($request->has('address')) {
            $project->address = $request->input('address');
        }

        if ($request->has('area')) {
            $project->area = $request->input('area');
        }

        if ($request->has('cost')) {
            $project->cost = $request->input('cost');
        }

        if ($request->has('status')) {
            $project->status = $request->input('status');
        }

        if ($request->has('featured')) {
            $project->is_featured = $request->input('featured');
        }

        if ($request->has('published')) {
            $project->is_published = $request->input('published');
        }

        if ($request->has('start_date')) {
            $project->start_date = $request->input('start_date');
        }

        if ($request->has('finish_date')) {
            $project->finish_date = $request->input('finish_date');
        }

        if ($request->has('description')) {
            $project->description = $request->input('description');
        }

        if ($request->has('image')) {
            $project->featured_image = $newImageName;
        }

        $project->created_at = date('Y-m-d');

        $created = $project->save();

        if ($created) {
            // Code for add category for project
            $project->project_categories()->attach($request->categories);

            // Code for Insert Profile gallery image
            if (!empty($request->support_images)) {

                $lastImageId = ProjectGallery::select('id')->orderBy('id', 'DESC')->first();

                $i = 0;
                foreach ($request->file('support_images') as $image) {
                    if ($lastImageId != null) {
                        $imageId = $lastImageId->id + $i + 1;
                    } else {
                        $imageId = $i + 1;
                    }
                    // Code for store Profile gallery image 
                    $newImageName = "project_gal_img_" . $imageId . '.' . $image->getClientOriginalExtension();
                    $destinationPath = 'public/images/project-gallery';
                    $path = $image->storeAs($destinationPath, $newImageName);

                    $galleryInfo = NULL;
                    $galleryInfo = array(
                        'project_id' => $project->id,
                        'name' => $newImageName,
                        'created_at' => date('Y-m-d')
                    );
                    ProjectGallery::create($galleryInfo);
                    $i++;
                }
            }
            Toastr::success('New project details saved successfully.', 'success');
            return redirect()->route('admin.project.show', $project->id);
        } else {
            Toastr::error('W00ps! Something went wrong. Try again.', 'error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with('project_galleries', 'project_categories')->findOrFail($id);
        return view('pages.admin.projects.project.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with('project_galleries', 'project_categories')->findOrFail($id);
        $projectCategories = ProjectCategory::all();
        return view('pages.admin.projects.project.edit', ['project' => $project, 'projectCategories' => $projectCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::with('project_galleries', 'project_categories')->findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Project name field is blank.',
        ]);

        if ($request->has('image')) {
            $image = $request->file('image');
            $databaseImage = explode('.', $project->featured_image);
            $imageName = $databaseImage[0];

            $NewImageName = $imageName . '.' . $image->getClientOriginalExtension();
            $request->image->move(('storage/images/project-featured'), $NewImageName);
        }

        if ($request->has('name')) {
            $project->name = $request->input('name');
        }

        if ($request->has('client_name')) {
            $project->client_name = $request->input('client_name');
        }

        if ($request->has('client_mobile')) {
            $project->client_mobile = $request->input('client_mobile');
        }

        if ($request->has('address')) {
            $project->address = $request->input('address');
        }

        if ($request->has('area')) {
            $project->area = $request->input('area');
        }

        if ($request->has('cost')) {
            $project->cost = $request->input('cost');
        }

        if ($request->has('status')) {
            $project->status = $request->input('status');
        }

        if ($request->has('featured')) {
            $project->is_featured = $request->input('featured');
        }

        if ($request->has('published')) {
            $project->is_published = $request->input('published');
        }

        if ($request->has('start_date')) {
            $project->start_date = $request->input('start_date');
        }

        if ($request->has('finish_date')) {
            $project->finish_date = $request->input('finish_date');
        }

        if ($request->has('description')) {
            $project->description = $request->input('description');
        }

        if ($request->has('image')) {
            $project->featured_image = $NewImageName;
        }

        $project->updated_at = date('Y-m-d');

        $updated = $project->save();

        if ($updated) {
            // Code for update category for project
            $project->project_categories()->sync($request->categories);

            // Code for Update project gallery image
            if (!empty($request->existing_photos)) {
                $existingPhotos = $request->existing_photos;

                $dataArray = array();
                foreach ($project->project_galleries as $key => $gallery) {
                    $dataArray[$key] = $gallery->name;
                }

                $differenceArray = array_diff($dataArray, $existingPhotos);

                if ($differenceArray != null) {
                    foreach ($differenceArray as $value) {
                        $imageName = $value;
                        // delete gallery image
                        if (file_exists('storage/images/project-gallery/' . $imageName)) {
                            unlink('storage/images/project-gallery/' . $imageName);
                        }
                        // delete image from database
                        $dbImage = ProjectGallery::where('name', $value)->first();
                        $dbImage->delete();
                    }
                }
            }

            // Code for Insert Profile gallery image
            if (!empty($request->support_images)) {

                $lastImageId = ProjectGallery::select('id')->orderBy('id', 'DESC')->first();

                $i = 0;
                foreach ($request->file('support_images') as $image) {
                    if ($lastImageId != null) {
                        $imageId = $lastImageId->id + $i + 1;
                    } else {
                        $imageId = $i + 1;
                    }
                    // Code for store Profile gallery image 
                    $newImageName = "project_gal_img_" . $imageId . '.' . $image->getClientOriginalExtension();
                    $destinationPath = 'public/images/project-gallery';
                    $path = $image->storeAs($destinationPath, $newImageName);

                    $galleryInfo = NULL;
                    $galleryInfo = array(
                        'project_id' => $project->id,
                        'name' => $newImageName,
                        'created_at' => date('Y-m-d')
                    );
                    ProjectGallery::create($galleryInfo);
                    $i++;
                }
            }
            Toastr::success('Project info has updated successfully.', 'success');
            return redirect()->route('admin.project.show', $project->id);
        } else {
            Toastr::error('W00ps! Something went wrong. Try again.', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::with('project_galleries', 'project_categories')->findOrFail($id);
        // Code for delete category for project
        $project->project_categories()->detach();

        // delete gallery image
        if ($project->project_galleries != null) {
            foreach ($project->project_galleries as $gallery) {

                if (file_exists('storage/images/project-gallery/' . $gallery->name)) {
                    unlink('storage/images/project-gallery/' . $gallery->name);
                }
                // delete image from database
                $dbImage = ProjectGallery::where('name', $gallery->name)->first();
                $dbImage->delete();
            }
        }

        // Delete Action Photo
        if ($project->featured_image != null) {
            if (file_exists('storage/images/project-featured/' . $project->featured_image)) {
                unlink('storage/images/project-featured/' . $project->featured_image);
            }
        }

        $delete = $project->delete();

        if ($delete) {
            Toastr::success('Project has deleted successfully.', 'success');
            return redirect()->route('admin.project.index');
        } else {
            Toastr::error('W00ps! Something went wrong. Try again.', 'error');
            return redirect()->back();
        }
    }
}
