<?php echo "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Daftar Matapelajaran</h2>
						<div class="box-icon">

							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>

					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>NIP</th>
								  <th>Nama Guru</th>
								  <th>Nama Matapelajaran</th>
								  <th>Aksi</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  $no = 1;
						  foreach ($quis as $data_quis){
							echo "<tr>
								<td>$no</td>
								<td>$data_quis[nip]</td>
								<td>$data_quis[nama]</td>
								<td>$data_quis[nama_mapel]</td>
								";
								?>
								<td class="center"><a class="btn btn-success" href="<?php echo base_url()."index.php/home/list_quis/$data_quis[id_mapel]";?>">Lihat quis</a></td>
								
								
							</tr>
							<?php $no++;} ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
