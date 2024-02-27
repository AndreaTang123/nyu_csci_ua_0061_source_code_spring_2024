let allImgTags = document.querySelectorAll("#container img");

for (let i =0;i<allImgTags.length;i++){

    allImgTags[i].onmouseover = function(event){
        event.currentTarget.src = event.currentTarget.dataset.rolloverimage;

    }
    allImgTags[i].onmouseout = function(event){
        event.currentTarget.src = event.currentTarget.dataset.normalimage;
        
    }
}