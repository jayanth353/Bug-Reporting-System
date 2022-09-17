<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vuln table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="table.css">
</head>
<body>
	
	<div class="limiter">
	
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h1 style="padding-left:430px;color:white">  Vulnerabilities</h1>
				<br>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">S.no</th>
								<th class="column2">Vulnerable type</th>
								<th class="column3">Url</th>
								<th class="column4">Proof of Concept</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
                               $connection = mysqli_connect("localhost","id19578455_bugrep","BugReporting$7733");
							   $db= mysqli_select_db($connection,"id19578455_signup");
								$selectquery = "select * from report";

								$query=mysqli_query($connection,$selectquery);

								$nums=mysqli_num_rows($query);
								$i=1;
								while($res=mysqli_fetch_array($query))
								{
									?>
									<tr>
									<td><?php echo $i++ ?></td>
	                                <td><?php echo $res['vultype'] ?></td>
									<td><?php echo $res['url'] ?></td>
									<td><?php echo $res['poc'] ?></td>
									</tr>
								<?php
								
								}

								?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>