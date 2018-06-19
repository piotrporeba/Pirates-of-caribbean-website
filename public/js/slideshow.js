var i, imgs, slideshow;

function show()
{
  slideshow.src = imgs[i] ;
  (i === (imgs.length -1) ) ? i=0 : i++ ;
  setTimeout( show, 1000 );
}

function initialise()
{
  slideshow = document.getElementById("slideshow");

  imgs = [ "images/pirates1.jpg", "images/pirates2.jpg", "images/pirates3.jpg", "images/pirates4.jpg", "images/pirates5.jpg", "images/pirates6.jpg", "images/pirates7.jpg"] ;

  var preload= new Array();
  for( i=0; i< imgs.length; i++ )
  {
    preload[ i ] = new Image();
    preload[ i ].src = imgs[ i ];
  }

  i=0;

  show();
}
onload=initialise;

