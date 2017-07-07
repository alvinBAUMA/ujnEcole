<!-- BLOCK D'AJOUT D'UN PRODUIT -->
<div class="modal fade" id="add-cote">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method = "POST" action = "" enctype = "multipart/form-data">
                <div class="panel panel-default" style="margin-bottom: -20px">
                    <div class="modal-header panel-heading">
                        <button  type="button" class="close" data-dismiss="modal">X</button>
                        <h3 class="panel-title text-bold">Notez un éleve</h3>
                    </div>
                    <div class="modal-body">

                        <div class="modal-body">

                            <div class="form-group-lg">
                                <label>Choisir l'éleve</label>
                                <select name="genre_eleve" id="genre_eleve" class='form-control' style="width: 100%">
                                    <option value="homme">Alvin bauyma</option>
                                    <option value="femme">pascal koko</option>
                                </select></div>

                            <div style="margin-top: 20px" class="form-group-lg">
                                <label>Choisir le cours</label><br/>

                                <div class="form-inline">
                                    <select style="width: 50%"  name="cours" id="cours" class='form-control'>
                                        <option class="hidden">Choisir</option>
                                        <option value="Math">Math</option>
                                        <option value="Francais">Francais</option>
                                    </select>
                                    <input style="width: 50%" id="note" name="note" class='form-control pull-right' required="requireds" placeholder=""/>    
                                </div>
                            </div>      

                        </div>


                    </div>
                    <div class="modal-footer panel-footer">
                        <div class="form-group-sm">
                            <button class="btn btn-sm btn-primary pull-right" value="Valider" id="btn-add-cote" style="margin-bottom: 5px; color: #fff"><strong>Valider</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#cours").change(function () {

        var cours = $(this).val();
        if (cours == "Francais") {
            $("#note").attr("placeholder").val(".............../10");
        }

        if (cours == "Math") {
            $("#note").attr("placeholder").val(".............../10");
        }
    });
</script>
<!-- FIN BLOCK D'AJOUT PRODUIT -->