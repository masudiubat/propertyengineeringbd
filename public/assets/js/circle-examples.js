$('.first.circle').circleProgress({
    value: 0.50
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(50 * progress) + '<i>%</i>');
});
$('.second.circle').circleProgress({
    value: 0.45
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(45 * progress) + '<i>%</i>');
});
$('.third.circle').circleProgress({
    value: 0.45
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(40 * progress) + '<i>%</i>');
});
$('.fourth.circle').circleProgress({
    value: 0.55
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(55 * progress) + '<i>%</i>');
});
$('.fifth.circle').circleProgress({
    value: 0.45
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(45 * progress) + '<i>%</i>');
});
$('.sixth.circle').circleProgress({
    value: 0.37
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(37 * progress) + '<i>%</i>');
});