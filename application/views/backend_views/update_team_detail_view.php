			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Ekibimiz (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/team/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

							{item_detail}				
								<p>
									<label>İsim</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" value="{team_title}" name="team_title" 
									/>
								</p><br />

								<p>
									<label>Pozisyon</label>
									<input class="text-input large-input" type="text"
									style="color:#000;" id="large-input" value="{team_detail}" name="team_detail" 
									/>
								</p><br />
								
								<p>
									<input type="hidden" name="id" value="{team_id}"/>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}	
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->