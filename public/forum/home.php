<?php include 'db_connect.php' ?>
<div class="containe-fluid">
	<div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?php echo "Bienvenido ". $_SESSION['login_name']."!"  ?>
                    
                    <hr>
                    <h4><i class="fa fa-hashtag text-primary"></i> Nuevos Caminos</h4>
                    <div class="row">
                    
                        <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>Bienvenido al foro de aplicaciones de Nuevos Caminos, donde podrás saciar tus dudas directamente
                                     con otros usuarios que se encuentran dentro del territorio brasileño.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <hr class="divider" style="max-width: 100%">
                    <div class="row">
                    <?php if($_SESSION['login_type'] == 1): ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body bg-primary">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"><i class="fa fa-users" style="font-size: 50px;"></i></span>
                                        <h4><b>
                                            <?php echo $conn->query("SELECT * FROM users")->num_rows; ?>
                                        </b></h4>
                                        <p><b>Usuarios</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body bg-success">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"><i class="fa fa-comments" style="font-size: 50px;"></i></span>
                                        <h4><b>
                                            <?php echo $conn->query("SELECT * FROM topics")->num_rows; ?>
                                        </b></h4>
                                        <p><b>Temas dentro del Foro</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body bg-warning">
                                    <div class="card-body text-white">
                                        <span class="float-right summary_icon"><i class="fa fa-tags" style="font-size: 50px;"></i></span>
                                        <h4><b>
                                            <?php echo $conn->query("SELECT * FROM categories")->num_rows; ?>
                                        </b></h4>
                                        <p><b>Etiquetas</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>	

                    <hr class="divider" style="max-width: 100%">
                    <h4><i class="fa fa-tags text-primary"></i> Etiquetas</h4>
                    <div class="row">
                    <?php
                     $tags = $conn->query("SELECT * FROM categories order by name asc");
                     while($row=$tags->fetch_assoc()):
                    ?>
                        <div class="col-md-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p>
                                    <large><i class="fa fa-tag text-primary"></i> <b><?php echo $row['name'] ?></b></large>
                                </p>
                                <hr class="divider" style="max-width: 100%">
                                <p><small><i><?php echo $row['description'] ?></i></small></p>
                            </div>
                        </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>      			
        </div>
    </div>
</div>
<script>
	$('#manage-records').submit(function(e){
        e.preventDefault()
        start_load()
        $.ajax({
            url:'ajax.php?action=save_track',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                resp=JSON.parse(resp)
                if(resp.status==1){
                    alert_toast("Data successfully saved",'success')
                    setTimeout(function(){
                        location.reload()
                    },800)

                }
                
            }
        })
    })
    $('#tracking_id').on('keypress',function(e){
        if(e.which == 13){
            get_person()
        }
    })
    $('#check').on('click',function(e){
            get_person()
    })
    function get_person(){
            start_load()
        $.ajax({
                url:'ajax.php?action=get_pdetails',
                method:"POST",
                data:{tracking_id : $('#tracking_id').val()},
                success:function(resp){
                    if(resp){
                        resp = JSON.parse(resp)
                        if(resp.status == 1){
                            $('#name').html(resp.name)
                            $('#address').html(resp.address)
                            $('[name="person_id"]').val(resp.id)
                            $('#details').show()
                            end_load()

                        }else if(resp.status == 2){
                            alert_toast("Unknow tracking id.",'danger');
                            end_load();
                        }
                    }
                }
            })
    }
</script>