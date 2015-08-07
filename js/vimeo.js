/**
 * Created by Thomas on 15/04/28.
 */
// Set no conflict
j = jQuery.noConflict();
// Create Objects
j(document).ready(function() {
    // Created Objects for local storage
    j("#vimeo").hide();
    j("#closeVimeo").hide();
    j("#closeVimeo").live('click', function() {
        jQuery.fn.ClearVimeoItem();
    });
});
jQuery.fn.LaunchVimeoItem =function(vid){
    var vstring = '<iframe src="http://player.vimeo.com/video/'+vid+'" width="1024" height="768" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
    j("#vimeo").append(vstring);
    j("#vimeo").show();
    j("#closeVimeo").show();
};
jQuery.fn.ClearVimeoItem =function(){
    j("#vimeo").hide();
    j("#closeVimeo").hide();
    j("#vimeo").empty();
};