<!DOCTYPE html>
<html lang="en">
<?php require_once './includes/head.php'; ?>

<body>
	<div class="wrapper">

		<?php require_once './includes/sidebar.php'; ?>

		<div class="main">

			<?php require_once './includes/navbar.php'; ?>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-6">
							<h1 class="h3 mb-3">Data Info</h1>
						</div>
						<div class="col-6 text-end">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#addUser" id="btn-add">
								Add courses
							</button>
						</div>

					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<!-- delete model -->
								<div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteUserLabel"
									aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="deleteUserLabel">Delete User</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">

												<div class="text-success" id="success-delete"></div>
												<form action="" method="POST" id="deletest">
													<div>Are your sure you want to delete this?</div>
													<p id="namedel"></p>
													<div>
														<input type="submit" value="Delete User" class="btn btn-danger"
															name="submit-delete" data-bs-dismiss="modal">
													</div>
												</form>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>


								<div class="card-body">

									<!-- add student -->
									<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel"
										aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h1 class="modal-title fs-5" id="addUserLabel">Add User</h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="text-danger" id="error-add"></div>
													<div class="text-success" id="success-add"></div>
													<form action="index.php" method="POST" id="add-user-form">
														<div class="mb-3">
															<label for="name-add">Name</label>
															<input type="text" class="form-control" name="name-add"
																id="name-add" placeholder="Enter your name!">
														</div>
														<div class="mb-3">
															<label for="email-add">Duration</label>
															<input type="text" class="form-control" name="duration-add"
																id="duration-add"
																placeholder="Enter your couse duration">
														</div>
														<div class="mb-3">
															<label for="email-add">Fees</label><br>
															<!-- <input type="text" class="form-control" name="fees-add"
																id="fees-add" placeholder="Enter your  fees."
																> -->
															<select class="form-select"
																aria-label="Default select example" id="fees-add">
																<option selected>Open this select menu</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>



														</div>
														<div class="mb-3">
															<label for="email-add">Teacher</label>
															<!-- <input type="text" class="form-control" name="teacher-add"
																id="teacher-add" placeholder="Enter your  fees."> -->
														
														
														
															</div>
														<div>
															<input type="submit" value="Add User"
																class="btn btn-primary" name="submit-add">
														</div>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<!-- end of addd user model -->

									<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel"
										aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<p id="uname"></p>
													<h1 class="modal-title fs-5" id="editUserLabel">Edit User</h1>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="text-danger" id="error-edit"></div>
													<div class="text-success" id="success-edit"></div>
													<form action="" method="POST" id="edit-user-form">
														<div class="mb-3">
															<p id="edtid"></p>
															<label for="name-edit">Name</label>
															<input type="text" class="form-control" name="name-edit"
																id="nameedit" placeholder="Enter your name!">
														</div>
														<div class="mb-3">
															<label for="email-edit">Duration</label>
															<input type="text" class="form-control" name="duration-edit"
																id="durationedit" placeholder="Enter your email!">
														</div>
														<div class="mb-3">
															<label for="email-edit">Fees</label>
															<input type="text" class="form-control" name="duration-edit"
																id="feesedit" placeholder="Enter your email!">
														</div>
														<div class="mb-3">
															<label for="email-edit">Teacher</label>
															<input type="text" class="form-control" name="duration-edit"
																id="teacheredit" placeholder="Enter your email!">
														</div>
														<div>
															<input type="submit" value="Edit User"
																class="btn btn-primary" name="submit-edit">
														</div>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="card">
											<div class="card-body">
												<div class="table-responsive">

													<table class="table" id="tableid">
														<thead>
															<tr>
																<th>ID</th>
																<th>Course_Name</th>
																<th>Duration</th>
																<th>Fees</th>
																<th>Teacher</th>
																<th>Actions</th>
															</tr>
														</thead>
														<tbody id="tbody">



														</tbody>
													</table>
												</div>

											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
			<?php require_once './includes/footer.php'; ?>
		</div>
	</div>

	<?php require_once './includes/script.php'; ?>

	<script>
		let error = document.getElementById('error-add');
		let succes = document.getElementById('success-add');
		let form = document.getElementById('add-user-form');

		form.addEventListener('submit', async function (e) {
			e.preventDefault();
			let name = document.getElementById('name-add').value;
			let duration = document.getElementById('duration-add').value;
			let fees = document.getElementById('fees-add').value;
			let teacher = document.getElementById('teacher-add').value;



			if (name == "") {
				error.innerText = "Please Enter Your Name";
			}
			else if (duration == "") {
				error.innerText = "Please Enter Your duration";
			}

			else if (fees == "") {
				error.innerText = "Please Enter Your fees";
			}
			else if (teacher == "") {
				error.innerText = "Please Enter Your teacher";
			}
			else {
				const data =
				{
					Name: name,
					Duration: duration,
					Fees: fees,
					Teacher: teacher,
					Submit: 1
				};

				let res = await fetch('./controller/add2.php',
					{
						method: 'post',
						body: JSON.stringify(data)
					});

				res = await res.text();
				let result = await JSON.parse(res);
				if (result.success) {
					succes.innerText = result.success;
					document.getElementById('name-add').value = "";
					document.getElementById('duration-add').value = "";
					document.getElementById('fees-add').value = "";
					document.getElementById('teacher-add').value;

					showuser();
				};
			}
		});
		showuser();

		async function showuser() {
			let res = await fetch('./controller/showusers2.php');
			res = await res.text();
			let result = await JSON.parse(res);
			let tblrow = "";

			result.forEach(function (data) {
				tblrow += `<tr><td>${data['id']}</td><td>${data['name']}</td><td>${data['duration']}</td><td>${data['fees']}</td><td>${data['teacher']}</td><td><button type="button" class="btn btn-danger mx-4" data-bs-toggle="modal" data-bs-target="#deleteUser"  id="btn-add" onclick="deleteuser(${data['id']})">  
			Delete</button><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser" id="btn-add" onclick="showsingle(${data['id']})">Edit</button></td></tr>`;
			});
			document.getElementById('tbody').innerHTML = tblrow;
		}
		function deleteuser(id) {
			document.getElementById('deletest').addEventListener('submit', async function (e) {
				e.preventDefault();
				let res = await fetch('./controller/delete2.php',
					{
						method: 'post',
						body: JSON.stringify(
							{
								Id: id
							})
					});
				res = await res.text();
				let result = await JSON.parse(res);

				if (result.success) {
					succes.innerText = result.success;
					showuser();
				};



			})

			showuser();

		}
		async function showsingle(id) {

			let res = await fetch('./controller/showsingle2.php',
				{
					method: 'post',
					body: JSON.stringify(
						{
							Id: id,
						})
				});
			res = await res.text();
			let result = await JSON.parse(res);
			console.log(result);

			let name = document.getElementById('nameedit');
			let duration = document.getElementById('durationedit');
			let fees = document.getElementById('feesedit');
			let teacher = document.getElementById('teacheredit');



			name.setAttribute('value', result.name);
			duration.setAttribute('value', result.duration);
			fees.setAttribute('value', result.fees);
			teacher.setAttribute('value', result.teacher);



			let form = document.getElementById('edit-user-form');

			form.addEventListener('submit', async function (e) {
				e.preventDefault();
				let nameedit = document.getElementById('nameedit').value;
				let durationedit = document.getElementById('durationedit').value;
				let feesedit = document.getElementById('feesedit').value;
				let teacheredit = document.getElementById('teacheredit').value;



				let error = document.getElementById('error-edit');
				let success = document.getElementById('success-edit');






				if (nameedit == "") {
					error.innerText = "Please Enter Your Name";
				}
				else if (durationedit == "") {
					error.innerText = "Please Enter Your cousrse duration";
				}
				else if (feesedit == "") {
					error.innerText = "Please Enter Your fees";
				}
				else if (teacheredit == "") {
					error.innerText = "Please Enter Your teacher";
				}
				else {
					const data =
					{
						Id: id,
						Name: nameedit,
						Duration: durationedit,
						Fees: feesedit,
						Teacher: teacheredit,

						Submit: 1
					};

					let res = await fetch('./controller/update2.php',
						{
							method: 'post',
							body: JSON.stringify(data)

						});

					res = await res.text();
					let result = await JSON.parse(res);
					if (result.success) {
						success.innerText = result.success;
						document.getElementById('nameedit').value = "";
						document.getElementById('durationedit').value = "";
						document.getElementById('feesedit').value = "";

						showuser();
					};
				}
			});





		}



	</script>



</body>

</html>