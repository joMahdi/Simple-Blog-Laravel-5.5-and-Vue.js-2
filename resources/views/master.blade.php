@extends('layouts.app')
@section('content')
		<div id="app" class="container" >
			<div class="row">
				<div class="col-md-12">
					<center><h1>@{{message}}</h1><br></center>
					<div class="panel panel-primary">
						<div  class="panel-heading">
							<div class="row">
								<div class="col-md-10"><h3 class="panel-title">Experience</h3></div>
								<div class="col-md-2 text-right"><button class="btn btn-success" @click="open = true">Ajouter</button></div>
							</div>
							
						</div>
						<div class="panel-body">

							<div v-if="open"> 
								<div class="form-group">
									<label for="">Titre</label>
									<input type="text" class="form-control" name="" placeholder="le Titre" v-model="experience.title">
								</div>

								<div class="form-group">
									<label for="">Content</label>
									<textarea  class="form-control" name="" placeholder="le Content" v-model="experience.content"></textarea>
								</div>

								<!-- <div class="row">
									<div class="col-md-6">
										<label for="">Date Debu</label>
										<input type="date" class="form-control" name="" placeholder="Debu">
									</div>

									<div class="col-md-6">
										<label for="">Date Fin</label>
										<input type="date" class="form-control" name="" placeholder="Fin">
									</div>
								</div> -->
								<br>

								<button v-if="edit" class="btn btn-warning btn-block" @click="updateExperience">Modifier</button>
								<button v-else class="btn btn-info btn-block" @click="addExperience">Ajouter</button><br>

							</div>
							

							<ul class="list-group">
								<li class="list-group-item" v-for="experience in experiences">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm" @click="editExperience(experience)">Edit</button>
										<button class="btn btn-danger btn-sm" @click="deleteExperience(experience)">Delete</button>
									</div>	
										<h3>@{{experience.title}}</h3>
										<p>@{{experience.content}}</p>
										<small>@{{experience.created_at}} - @{{experience.created_at}}</small>
								</li>
								<br>

								
							</ul>
						</div>
					</div>

					<hr>
					
					<div class="panel panel-primary">
						<div  class="panel-heading">
							<div class="row">
								<div class="col-md-10"><h3 class="panel-title">Formation</h3></div>
								<div class="col-md-2 text-right"><button class="btn btn-success">Ajouter</button></div>
							</div>
							
						</div>
						<div class="panel-body">
							<ul class="list-group">
								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li><br>

								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li><br>

								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li>
							</ul>
						</div>
					</div>

					<hr>

					<div class="panel panel-primary">
						<div  class="panel-heading">
							<div class="row">
								<div class="col-md-10"><h3 class="panel-title">Portefolio</h3></div>
								<div class="col-md-2 text-right"><button class="btn btn-success">Ajouter</button></div>
							</div>
							
						</div>
						<div class="panel-body">
							<ul class="list-group">
								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li><br>

								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li><br>

								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li>
							</ul>
						</div>
					</div>

					<hr>


					<div class="panel panel-primary">
						<div  class="panel-heading">
							<div class="row">
								<div class="col-md-10"><h3 class="panel-title">Competence</h3></div>
								<div class="col-md-2 text-right"><button class="btn btn-success">Ajouter</button></div>
							</div>
							
						</div>
						<div class="panel-body">
							<ul class="list-group">
								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li><br>

								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li><br>

								<li class="list-group-item">
									<div class="pull-right">
										<button class="btn btn-warning btn-sm">Edit</button>
									</div>	
										<h3>Lorem ipsum dolor sit amet, consectetur adipisicing </h3>
										<p>elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<small>12/10/2017 - 12/10/2018</small>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
@endsection

@section('javascript')

 <script src="{{asset('js/vue.js')}}"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'idExperience' => '',
            'url' => url ('/')
        ]) !!};
  </script>

<script>

	var app = new Vue({
		el: '#app',
		data : {
			message: 'je suis mahdi joulali',
			experiences: [],
			open: false,
			experience: {
				id: 0,
				title: '',
				content: ''
			},
			edit: false
		},
		//delimiters: ['${', '}'],
		methods : {
			getExpeririences: function(){

				//axios.get(window.Laravel.url+'/getexperiences/'+window.Laravel.idExperience)
				axios.get('/getexperiences/')
				//axios.get('http://localhost/papa/public/getexperiences')
				
				.then(response => {
					console.log(response.data);
					this.experiences = response.data;
				})
				.catch(error =>{
					console.log('errors : ', error);
				})
			},
			addExperience: function() {
				axios.post(window.Laravel.url+'/addexperiences', this.experience)
				.then(response => {
					console.log(response.data);
					if (response.data.etat) {
						this.open = false;
						this.experience.id = response.data.id;
						this.experiences.unshift(this.experience);
							this.experience = {
											id: 0,
											title: '',
											content: ''
											}
					}
				})
				.catch(error =>{
					console.log('errors : ', error);
				})
			},
			editExperience: function(experience){
				this.open = true;
				this.edit = true;
				this.experience = experience;
			},
			updateExperience: function(){
				axios.put(window.Laravel.url+'/updatedexperiences', this.experience)
				.then(response => {
					console.log(response.data);
					if (response.data.etat) {
						this.open = false;
						
							this.experience = {
											id: 0,
											title: '',
											content: ''
											}
					}
					this.edit = false;
				})
				.catch(error =>{
					console.log('errors : ', error);
				})
			},
			deleteExperience: function(experience){
				axios.delete(window.Laravel.url+'/deletedexperiences/'+experience.id)
				.then(response => {
					console.log(response.data);
					if (response.data.etat) {
						var position = this.experiences.indexOf(experience);
						this.experiences.splice(position,1);
					}
				})
				.catch(error =>{
					console.log('errors : ', error);
				})
			}
		},
		mounted: function(){
			this.getExpeririences();
		}
	});
</script>

@endsection