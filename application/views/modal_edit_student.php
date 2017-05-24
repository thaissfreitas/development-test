<div class="tab-pane box" id="edit" style="padding: 5px">
	<div class="box-content">
		<?php foreach($edit_data as $row):?>
			<?php echo form_open('admin/student/'.$class_id.'/do_update/'.$row['student_id'] , array('class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
				<div class="padded">

					<div class="control-group">
						<label class="control-label"><?php echo get_phrase('Matr&iacutecula');?></label>
						<div class="controls">
							<input type="text" class="validate[required]" name="matricula" value="<?php echo $row['matricula'];?>" readonly />
						</div>
					</div>
					
					<div class="control-group"  style="float: none !important;">
						<label class="control-label"><?php echo get_phrase('Turma');?></label>
						<div class="controls">
							<select name="class_id" class="uniform" style="width:100%;">
							  <option value="0"><?php echo get_phrase('select_a_class');?></option>
								<?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row2):
								?>
									<option value="<?php echo $row2['class_id'];?>"
										<?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
											<?php echo $row2['name'];?></option>
								<?php
								endforeach;
								?>
							</select>
						</div>
					</div>
					
					<div class="control-group" style="float: none !important;">
					<!--Teste abas-->
					<ul class="nav nav-tabs nav-tabs-left">
						<li class="active">
							<a href="#personal" data-toggle="tab"><i class="icon-align-justify"></i>
								<?php echo get_phrase('Pessoal');?>
							</a>
						</li>
						<li>
							<a href="#addressAba" data-toggle="tab"><i class="icon-plus"></i>
								<?php echo get_phrase('Endere&ccedilo');?>
							</a>
						</li>
						<li>
							<a href="#contact" data-toggle="tab"><i class="icon-plus"></i>
								<?php echo get_phrase('Contato');?>
							</a>
						</li>
						<li>
							<a href="#responsavel" data-toggle="tab"><i class="icon-plus"></i>
								<?php echo get_phrase('Respons&aacutevel');?>
							</a>
						</li>
						<li>
							<a href="#documents" data-toggle="tab"><i class="icon-plus"></i>
								<?php echo get_phrase('Documentos');?>
							</a>
						</li>
						<li>
							<a href="#observacoes" data-toggle="tab"><i class="icon-plus"></i>
								<?php echo get_phrase('Observa&ccedil&otildees');?>
							</a>
						</li>
						
						<?php
						if($class_id != ""){
						?>
							<li>
								<a href="#payment" data-toggle="tab"><i class="icon-plus"></i>
									<?php echo get_phrase('Pagamento');?>
								</a>
							</li>
						<?php
						}
						?>
						<li>
									
									<button type="submit"    class="btn btn-gray" style="height: 38px;"> <i class="icon-plus-2">   </i> <?php echo get_phrase('Salvar');?> </button>
										
									
								</li>
					</ul>
					</div>
					
					
					<!-- aqui -->
					<div class="box-content">
						<div class="tab-content">
						
							<div class="tab-pane active" id="personal" style="padding: 5px">
								<div class="box-content">
								
									<div class="control-group" style="float: none !important;">
										<label class="control-label"><?php echo get_phrase('Status');?></label>
										<div class="controls">
											<input type="checkbox" name="status" value="<?php echo $row['status'];?>"><br>
										</div>
									</div>
								
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('CPF');?></label>
										<div class="controls">
											<input type="text" class="" name="cpf" value="<?php echo $row['cpf'];?>"/>
										</div>
									</div>													
									 <div class="control-group">
										<label class="control-label"><?php echo get_phrase('Nome');?></label>
										<div class="controls">
											<input type="text" class="validate[required]" name="name" value="<?php echo $row['name'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Identidade');?></label>
										<div class="controls">
											<input type="text" class="" name="identidade" value="<?php echo $row['identidade'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Data de nascimento');?></label>
										<div class="controls">
											<input type="text" class="datepicker fill-up" name="birthday" value="<?php echo $row['birthday'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Sexo');?></label>
										<div class="controls">
											<select name="sex" class="uniform" style="width:100%;">
												<option value="male" <?php if($row['sex'] == 'masculino')echo 'selected';?>><?php echo get_phrase('Masculino');?></option>
												<option value="female" <?php if($row['sex'] == 'feminino')echo 'selected';?>><?php echo get_phrase('Feminino');?></option>
											</select>
										</div>
									</div>
								</div>
							</div>	 
							
							<div class="tab-pane box" id="addressAba" style="padding: 5px">
								<div class="box-content">
								
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Endere&ccedilo');?></label>
										<div class="controls">
											<input type="text" class="" name="address" value="<?php echo $row['address'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('N&uacutemero');?></label>
										<div class="controls">
											<input type="text" class="" name="numero" value="<?php echo $row['numero'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Complemento');?></label>
										<div class="controls">
											<input type="text" class="" name="complemento" value="<?php echo $row['complemento'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Bairro');?></label>
										<div class="controls">
											<input type="text" class="" name="bairro" value="<?php echo $row['bairro'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Cep');?></label>
										<div class="controls">
											<input type="text" class="" name="cep" value="<?php echo $row['cep'];?>"/>
										</div>
									</div>
								
								</div>
							</div>
							
							<div class="tab-pane box" id="contact" style="padding: 5px">
								<div class="box-content">
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Celular');?></label>
										<div class="controls">
											<input type="text" class="" name="celular" value="<?php echo $row['celular'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Telefone');?></label>
										<div class="controls">
											<input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Email');?></label>
										<div class="controls">
											<input type="text" class="" name="email" value="<?php echo $row['email'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Senha');?></label>
										<div class="controls">
											<input type="text" class="" name="password" value="<?php echo $row['password'];?>"/>
										</div>
									</div>
								</div>
							</div>
							
							<!-- <div class="tab-pane box" id="documents" style="padding: 5px">
								<div class="box-content">
									
								</div>
							</div> -->
							
							<div class="tab-pane box" id="observacoes" style="padding: 5px">
										<div class="box-content">
											
											
											<div class="control-group" style="float: none !important;">
												<label class="control-label"><?php echo get_phrase('Observacao');?></label>
												<div class="controls">
													<form>
														<textarea name="observacao" id="observacao" onkeyup="limitaCaractere('mensagem',5,'exibeLimite');" cols="100" rows="7" value="<?php echo $row['observacao'];?>"></textarea>
													</form>
												</div>
											</div>
										
										</div>
							</div>
							
							<div class="tab-pane box" id="responsavel" style="padding: 5px">
								<div class="box-content">
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Nome do Pai');?></label>
										<div class="controls">
											<input type="text" class="" name="father_name" value="<?php echo $row['father_name'];?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"><?php echo get_phrase('Nome da M&atildee');?></label>
										<div class="controls">
											<input type="text" class="" name="mother_name" value="<?php echo $row['mother_name'];?>"/>
										</div>
									</div>
								</div>
							</div>
							
							
							<!-- <div class="tab-pane box" id="payment" style="padding: 5px">
								<div class="box-content">

								</div>
							</div> -->
							
						</div>	
					</div>	
				</div>
				<!--fim aqui--> 
				
				 <!-- <div class="control-group">
				   <label class="control-label"></label>
					<!--<div class="controls" style="width:210px;">
						<!--<div class="avatar">
							<img id="blah" class="avatar-large" src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" height="100"  />
						</div>--
					</div>-->

				<!--
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo get_phrase('photo');?></label>
					<div class="controls" style="width:210px;">
						<input type="file" class="" name="userfile" id="imgInp" />
					</div>
				</div>-->
				
				<!--<div class="control-group">
					<label class="control-label"><?php echo get_phrase('roll');?></label>
					<div class="controls">
						<input type="text" class="" name="roll" value="<?php echo $row['roll'];?>"/>
					</div>
				</div> 
			</div>-->
		 
		  
				  <!--<div class="form-actions">				  
					 <center> <button type="submit" class="btn btn-gray"><?php echo get_phrase('Salvar');?></button></center>					
				  </div>-->
		  
							  
			</form>
		<?php endforeach;?>
	</div>
</div>
					
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>