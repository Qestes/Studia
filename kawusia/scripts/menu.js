let current_slide_index = 1;
const FIRST_SLIDE_INDEX = 1;
const LAST_SLIDE_INDEX  = 5;

function slider_left_click(){
    let tmp = current_slide_index--;
    if(current_slide_index < FIRST_SLIDE_INDEX ){
        current_slide_index = LAST_SLIDE_INDEX;
        update_slider(FIRST_SLIDE_INDEX);
    }
    else{
        update_slider(tmp);
    }
}

function slider_right_click(){
    let tmp = current_slide_index++;
    if(current_slide_index > LAST_SLIDE_INDEX){
        current_slide_index = FIRST_SLIDE_INDEX;
        update_slider(LAST_SLIDE_INDEX);
    }
    else{
        update_slider(tmp);
    }
}

function update_slider(old_index){

    const control_center = document.querySelector(".control_center");
    const slides = document.querySelectorAll(".slide");

    control_center.innerHTML = current_slide_index + " / 5";
    slides[current_slide_index - 1].style.opacity = "1";
    slides[old_index - 1].style.opacity = "0";
}

