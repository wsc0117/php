/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function InputCheck(RegForm){
    if(RegForm.username.value==""){
        alert("账号不能为空");
        RegForm.username.focus();
        return (false);
    }
}


