let next = document.querySelector('.next');
let prev = document.querySelector('.prev');


// next event
next.addEventListener('click', e =>{
nextSlide();
clearInterval(nexttimer);
     nexttimer = setInterval(nextSlide, 5000);
});


// previous event 
prev.addEventListener('click', e =>{
prevSlide();
clearInterval(nexttimer);
  nexttimer = setInterval(nextSlide, 5000);
});


// manual next,  this will change the class and add current 

function nextSlide(){
const current = document.querySelector('.current');
const container = document.getElementsByClassName('container');
current.classList.remove('current');
if(current.nextElementSibling){
    current.nextElementSibling.classList.add('current');
}else{
    container[0].classList.add('current');
}

}



// manual previous,  this will change the class and add current 

function prevSlide(){
    const current = document.querySelector('.current');
    const container = document.getElementsByClassName('container');
    current.classList.remove('current');

    if(current.previousElementSibling){
        current.previousElementSibling.classList.add('current');
    }else{
        container[container.length - 1].classList.add('current');
    }
    }


    // auto next,  this will change the class and add current //

nexttimer = setInterval(nextSlide, 5000);



// top menu responsiveness

const toggl = document.querySelector('#hamburg');

let ul = document.querySelector('.mobilenav');

toggl.addEventListener('click', blockItems);

function blockItems(){
if(ul.style.display == "none"){

ul.style.display = "block";

}else{

    ul.style.display ="none";
    
}

};


// ul.classList.add('active');
//     if(togglestatus == "true"){ 

//         ul.classList.add('active');

//         let togglestatus = "false";

//     } else if(togglestatus == "false" ){

//         ul.classList.remove('active');

//         let togglestatus = "true";
//     }
    