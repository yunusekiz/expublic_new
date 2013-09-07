			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;"> Hizmetlerimiz (yeni kayıt ekleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/service/AddItem" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label> İcon </label>               
									<input class="text-input large-input" type="text" style="color:#000;" id="large-input" name="service_icon" />
									<br />
								</p>
								<p>
									<label> Başlık</label>               
									<input class="text-input large-input" type="text" style="color:#000;" id="large-input" name="service_title" />

								</p>
								<p>
									<label> Detay</label>               
									<textarea class="text-input textarea" id="textarea" name="service_detail"
									 cols="79" rows="5" style="color:#000;"></textarea>
								</p>																
								<p>
									<input class="button" type="submit" value="Kaydet" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->