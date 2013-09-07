			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Kiralık Araçlar -Kapak- (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/auto_cover/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

								<p>
									<label>Araç Seçenekleri </label>              
									<select name="new_auto_id" class="small-input" style="color:#000;">
										<option value="0">Araç Seçiniz</option>
										{item_parent}
										<option value="{auto_id}">{brand_name} {auto_title}</option>
										{/item_parent}
									</select><br />
									(kayıt güncellemek için listeden bir araç seçmelisiniz)

								</p><br /><br />
								
								{item_detail}				
								<p>
									<label>Kayıtlı Araç Adı </label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" name="auto_recorded_id"  value="{brand_name} {auto_title}" readonly
									/>
									<input type="hidden" name="auto_id" value="{auto_id}"/>
								</p><br />
								
								<p>
									<input type="hidden" name="id" value="{cover_photo_id}"/>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}	
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->