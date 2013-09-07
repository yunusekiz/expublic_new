			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Manşet Metni Düzenleme Formu</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/headline/updateItem" method="post" enctype="multipart/form-data">
							<br /><h3> Manşet : </h3>
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

								{item_detail}
								<p>
									<label style="font-size:16px;"><b></b></label>
									<input class="text-input large-input" type="text"
									style="color:#000; font-size:9px;" id="large-input" name="title" 
									value="{title}" />
								</p>
								{/item_detail}
								<p>
									<input class="button" type="submit" value="Güncelle" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->