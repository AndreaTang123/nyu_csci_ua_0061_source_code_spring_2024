//get references of all images

let allImgTags = document.querySelectorAll("#container Img");
for (let i =0;i<allImgTags.length;i++){
    allImgTags[i].onclick = function(event){
        //get captions
        let info = event.currentTarget.dataset.info;
        console.log(info);
        document.getElementById("caption").innerHTML=info;

        //make the bigimg
        let bigImg = document.createElement("img");
        bigImg.src=event.currentTarget.dataset.bigimage;
        document.getElementById("bigimage").append(bigImg);
       
        document.getElementById("bigimage").innerHTML="<img src="+event.
    }
}