let uploadContainer = document.querySelector('.uploader-container');
let  mainAdminDiv = document.querySelector('.mainAdminDiv');

document.querySelector('.divUploder').onclick = ()=>{
    uploadContainer.style.display = "block";
    mainAdminDiv.style.display = 'none';
}

document.querySelector('.closeBtn').onclick = ()=> {
    uploadContainer.style.display = "none";

    setTimeout(()=> {
        location.reload();
    }, 1000);
}