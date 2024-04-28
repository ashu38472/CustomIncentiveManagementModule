const navLogout = document.querySelector(".btn-logout");

const admin = document.querySelector('.hello-admin');

const empData = document.querySelector('.btn-emp-data');
const empTable= document.querySelector('.emp-data');
const x = document.querySelector('.x');

const updateSale = document.querySelector('.btn-update-sale');

const holiPack = document.querySelector(".btn-holiday-pack");
const x1 = document.querySelector('.x1');

const packManage = document.querySelector(".btn-holiday-pack-manage");

const sendMail = document.querySelector(".btn-send-mail");


sendMail.addEventListener("click",()=>{
    window.location.href = '/email/email.php';
});

packManage.addEventListener("click",()=>{
    window.location.href = '/pack/pack.php';
});


x1.addEventListener("click",()=>{
    document.querySelector('.holi-pack').style.display = "none";
    admin.style.display= "block";
});

holiPack.addEventListener("click",()=>{
    admin.style.display= "none";
    document.querySelector('.holi-pack').style.display = "block";
});

updateSale.addEventListener("click",()=>{
    window.location.href = '/cal/cal.php';
});

x.addEventListener("click",()=>{
    empTable.style.display = "none";
    admin.style.display= "block";
});

empData.addEventListener("click",()=>{
    admin.style.display= "none";
    empTable.style.display = "block";
});


navLogout.addEventListener('click',()=>{
    window.location='/home/home.php';
})

