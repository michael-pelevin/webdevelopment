if(document.forms.add){
    document.forms.add.addEventListener('submit', addNewComments);
    
    function addNewComments(event){
        event.preventDefault();
        
        var formData = new FormData(this);
        
        doAjax({
            method: 'POST',
            url:'../comments/add_comment.php',
            data: formData,
            callback: function(response){
                alert(response);
            }
        });
        
    }
}