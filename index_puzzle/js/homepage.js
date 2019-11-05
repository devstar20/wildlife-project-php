var H = 0;
//*huimsppt.2018.Retrieved September.26.2019 from http://www.jq22.com/jquery-info21090.
//*change the mouse icon to the other pattern.
$(document).bind('mousemove touchmove',function(e) {
    e.preventDefault();
    var drawSize = 10;
    var drawType = '♥️';
    var floatType = 'floatOne';
    var xPos = e.originalEvent.pageX;
    var yPos = e.originalEvent.pageY;
    
    $('body').append('<div class="draw" style=" font-size:'+drawSize+'px;left:'+xPos+'px;top:'+yPos+'px;-webkit-animation:'+floatType+' .9s 1;-moz-animation:'+floatType+' .9s 1;color:#33a0fc;">'+drawType+'</div>');
  
    $('.draw').each(function() {
      var div = $(this);
      setTimeout(function() {$(div).remove();},800);
    });
});