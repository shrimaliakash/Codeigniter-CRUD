<?php $this->load->view('header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Operations using CodeIgniter</h3> <hr />
			<?php if ($this->session->flashdata('error')) { ?>

				<p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
			<?php } ?>
			<?php if ($this->session->flashdata('success')) { ?>

				<p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
			<?php } ?>
			<a href="<?php echo site_url('insert'); ?>">
			<button class="btn btn-primary"> Insert Record</button></a>
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Address</th>
						<th>Posting Date</th>
						<th>Edit</th>
						<th>Delete</th>
					</thead>
					<tbody>
						<?php
						$cnt=1;
						foreach($result as $row) {
						?>
						    <tr>
							    <td><?php echo htmlentities($cnt);?></td>
							    <td><?php echo htmlentities($row->FirstName);?></td>
							    <td><?php echo htmlentities($row->LastName);?></td>
							    <td><?php echo htmlentities($row->EmailId);?></td>
							    <td><?php echo htmlentities($row->ContactNumber);?></td>
							    <td><?php echo htmlentities($row->Address);?></td>
							    <td><?php echo htmlentities($row->PostingDate);?></td>
							    <td>
								<?php
								//for passing row id to controller
								 echo  anchor("Read/getdetails/{$row->id}",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
								</td>
								<td>
								<?php
								//for passing row id to controller
								 echo anchor("Delete/index/{$row->id}",' ','class="glyphicon glyphicon-trash btn-danger btn-xs"')?>
								</td>
							</tr>
						<?php
						$cnt++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
