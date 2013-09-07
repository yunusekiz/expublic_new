			<div class="content-box"><!-- Start Content Box -->
				   
			 	<div class="content-box-header">
					<h3> <font style="margin-left:240px;">Markalar (kayıt güncelleme formu)</font></h3>
					<div class="clear"></div>
			 	</div> <!-- End .content-box-header -->	
				
				
				  <div class="content-box-content">	
					
					 <div class="tab-content default-tab" id="1">
					
						<form action="{base}backend/brand/updateItemDetail" method="post" enctype="multipart/form-data">
							<br />
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							{item_detail}
								<p>
									<label> Marka Adı</label>               
									<input class="text-input large-input" type="text" style="color:#000;" id="large-input" name="brand_name" value="{brand_name}" />
									<br /><br />
									<label>(Bilgi ::: markayı güncellemek için, yukarıdaki kutucuğa yeni bir isim girip onaylayın)</label>
								</p>
								<p>
									<input type="hidden" name="id" value="{brand_id}"/>
									<input class="button" type="submit" value="Kaydet" />
								</p>
							{/item_detail}
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div>  <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->                     
                
			</div> <!-- End .content-box -->