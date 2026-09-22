//satual=1;
//smax=4;
//stmp=2000; //3000 milisegundos = 3 segundos

//function troca(){
//	document.getElementById("b1").style.visibility="hidden";
	//document.getElementById("b2").style.visibility="hidden";
	//document.getElementById("b3").style.visibility="hidden";
  //document.getElementById("b4").style.visibility="hidden";
	//document.getElementById("b"+satual).style.visibility="visible";
	//satual=satual+1;
	//if(satual > smax){
	//	satual=1;
	//}
//}

//function slider(){
//	document.getElementById("b1").style.visibility="hidden";
//	document.getElementById("b2").style.visibility="hidden";
//  document.getElementById("b3").style.visibility="hidden";
//	document.getElementById("b4").style.visibility="visible";
//	sliderTimer=setInterval(troca,stmp);
//}

let time = 3000
    currentImageIndex = 0
        imagens = document.querySelectorAll("#slider img")
            max = imagens.length
;
function nextImage(){
    imagens[currentImageIndex].classList.remove("selected");
    
    currentImageIndex++

    if(currentImageIndex >= max)
        currentImageIndex = 0;

    imagens[currentImageIndex].classList.add("selected");
}
function start(){
    setInterval(() => {
        nextImage();
    }, time)
}

window.addEventListener("load", start);