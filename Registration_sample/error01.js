function subform(){
    //変数の定義づけ
    var family_name = document.getElementsByName("family_name");
    var isRight = true;
    
    if(family_name.length <= 0){
        document.getElementById("EM01").innerHTML = "名前(姓)を入力してください";
        isRight = false;
    }else{
        document.getElementById("EM01").innerHTML = "";
    }
    return isRight;
}