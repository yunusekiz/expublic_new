			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Ekibimiz (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/team/addItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Kayıt Fotoğrafı </label>
                                	<input type="file" name="photo_field" accept="image/*" />
                                	<label>Not:: ideal fotoğraf boyutu : 150x149 (px)</label>
                                </p><br /><hr><br />

								<p>
									<label>İsim</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="team_title" 
									/>
								</p><br />

								<p>
									<label>Pozisyon</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="team_detail" 
									/>
								</p><br />

								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->