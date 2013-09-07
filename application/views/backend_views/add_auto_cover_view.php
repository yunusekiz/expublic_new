			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Kiralık Araçlar -Kapak- (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/auto_cover/addItem" method="post" enctype="multipart/form-data">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Araç Seçenekleri </label>              
									<select name="auto_id" class="small-input" style="color:#000;">
										<option value="0">Araç Seçiniz</option>
										{auto_model_iteration}
										<option value="{auto_id}">{brand_name} {auto_title}</option>
										{/auto_model_iteration}
									</select> 
								</p><br /><br />
								<label>(Bilgi ::: yeni bir kapak ekleyebilmek için önce araç seçmelisiniz)</label> 
								<br /><hr><br />
								<p>
									<label>Araç Kapak Fotoğrafı </label>
                                	<input type="file" name="photo_field" accept="image/*" />
                                </p><br /><hr><br />

								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->