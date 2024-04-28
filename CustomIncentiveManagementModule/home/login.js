export default varifyAdmin;

const email = "admin@gmail.com";
const password = "Admin123";

async function varifyAdmin(user,pass){
    if(user===null || pass===null) {
        alert("plz enter data");
    }else if(user===email){
        if(pass===password){
            window.location.href = '/main/main.php';
        }else alert("Invalid Password");
    }else{
        alert("Invalid Email");
    }
}


