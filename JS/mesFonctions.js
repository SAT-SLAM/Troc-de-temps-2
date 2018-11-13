function InsertNewOffre()
{
    $.ajax
    (
        {
            type:"GET",
            url:"index.php/ControleurOffres/newOffre",
            data:"idOffre="+$('#idOffre').val()+"&descriptionOffre="+$('#descriptionOffre').val()+"&dateOffre="+$('#dateOffre').val()+"&idService="+$('#idService').val(),
            success:function(data)
            {
                bootbox.alert(data);
                alert("Nouvelle offre créée !");
            },
            error:function()
            {
                alert("Erreur");
            }
        }
    );     
}
