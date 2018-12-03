// $('.jzoom').jzoom({
// 		// width / height of the magnifying glass
// 		  width: 200,
		 
// 		  // where to position the zoomed image
// 		  position: "right",
// 		  // x/y offset in pixels.
// 		  offsetX: 20,
// 		  offsetY: 0,
// 		  // opacity level
// 		  opacity: 0.6,
// 		  // background color
// 		  bgColor: "#fff",
// 		  // loading text
// 		  loading: "Loading..."
// 	});

var evt = new Event(),
    m = new Magnifier(evt);

m.attach({
    thumb: '#thumb',
    large: 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Starry_Night_Over_the_Rhone.jpg/400px-Starry_Night_Over_the_Rhone.jpg',
    largeWrapper: 'preview'
});