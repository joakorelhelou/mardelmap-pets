<!-- Pet add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Mascota</h4>
			</div>
			<div class="modal-body">
				<form role="form" action="#" method="post">
					<input id="locationLan" type="hidden">
					<input id="locationLon" type="hidden">
					<input id="postTypef" type="hidden">

					<div class="form-group">
						<label for="pet">Mascota:</label>
						<select class="form-control" id="petType">
							<option value="0">Seleccionar</option>
							<option value="1">Perro</option>
							<option value="2">Gato</option>
							<option value="3">Ave</option>
						</select>

					</div>

					<div class="form-group">
						<label>Sexo:</label>

						<div class="radio">
							<label>
								<input type="radio" name="sexRadios" id="sexRadios1" value="M" checked>
								Macho </label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="sexRadios" id="sexRadios2" value="F">
								Hembra</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="sexRadios" id="sexRadios3" value="N">
								No se sabe</label>
						</div>
					</div>

					<div class="form-group">
						<label>Edad aproximada:</label>

						<div class="radio">
							<label>
								<input type="radio" name="ageRadios" id="ageRadios1" value="1" checked>
								De 0 a 1 </label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="ageRadios" id="ageRadios2" value="2">
								De 1 a 5</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="ageRadios" id="ageRadios3" value="3">
								De 5 a 10</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="ageRadios" id="ageRadios4" value="4">
								Más de 10</label>
						</div>
					</div>

					<div class="form-group">
						<label for="petName">Nombre de la mascota:</label>
						<input id="petName" name="petName" type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">

						<label for="ownerName">Nombre del dueño:</label>
						<input id="ownerName" name="ownerName" type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">

						<label for="phone1">Teléfono de Contacto 1:</label>
						<input id="phone1" name="phone1" type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">

						<label for="phone2">Teléfono de Contacto 2:</label>
						<input id="phone2" name="phone2" type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">

						<label for="address1">Dirección 1:</label>
						<input id="address1" name="address1" type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">

						<label for="address2">Dirección 2:</label>
						<input id="address2" name="address2" type="text" class="form-control" placeholder="">
					</div>
					<div class="form-group">

						<label for="ownerEmail">Dirección de Email:</label>
						<input id="ownerEmail" name="ownerEmail" type="email" class="form-control" placeholder="">
					</div>

					<div class="form-group">
						<label for="description">Descripción de la nota:</label>
						<textarea id="description" name="description" class="form-control" rows="3"></textarea>
					</div>

					<div class="form-group">
						<label for="inputPhoto">Foto</label>
						<input type="file" id="inputPhoto">
						<p class="help-block">
							Foto de la mascota
						</p>
					</div>

					<div class="form-group">
						<label for="dogBreed">Raza:</label>

						<select id="dogBreed" name="dogBreed" data-placeholder="Seleccione una raza..." class="chosen-select col-md-4" style="width:350px;" >
							<option value=""></option>
							<option value="Affenpinscher">Affenpinscher</option>
							<option value="Airedale Terrier">Airedale Terrier</option>
							<option value="Akita">Akita</option>
							<option value="Akita Americano">Akita Americano</option>
							<option value="Akita Inu o Akita">Akita Inu o Akita</option>
							<option value="Alano Español o Bulldog Español">Alano Español o Bulldog Español</option>
							<option value="Alaskan Husky">Alaskan Husky</option>
							<option value="Alaskan Malamute">Alaskan Malamute</option>
							<option value="American Eskimo o American Spitz">American Eskimo o American Spitz</option>
							<option value="American Foxhound">American Foxhound</option>
							<option value="American Hairless Terrier">American Hairless Terrier</option>
							<option value="American Pit Bull Terrier o Pitbull">American Pit Bull Terrier o Pitbull</option>
							<option value="American Staffordshire Terrier">American Staffordshire Terrier</option>
							<option value="Antiguo Perro Pastor Inglés">Antiguo Perro Pastor Inglés</option>
							<option value="Ariegeois">Ariegeois</option>
							<option value="Artois">Artois</option>
							<option value="Australian Silky Terrier">Australian Silky Terrier</option>
							<option value="Australian Terrier">Australian Terrier</option>
							<option value="Austrian Black & Tan Hound">Austrian Black & Tan Hound</option>
							<option value="Azawakh">Azawakh</option>
							<option value="Balkan Hound">Balkan Hound</option>
							<option value="Barbet">Barbet</option>
							<option value="Basenji">Basenji</option>
							<option value="Basset Alpino">Basset Alpino</option>
							<option value="Basset Artesiano Normando">Basset Artesiano Normando</option>
							<option value="Basset Azul de Gascuña">Basset Azul de Gascuña</option>
							<option value="Basset de Artois">Basset de Artois</option>
							<option value="Basset de Westphalie">Basset de Westphalie</option>
							<option value="Basset Hound">Basset Hound</option>
							<option value="Basset Leonado de Bretaña">Basset Leonado de Bretaña</option>
							<option value="Bavarian Mountain Scenthound">Bavarian Mountain Scenthound</option>
							<option value="Beagle o Beagle Inglés">Beagle o Beagle Inglés</option>
							<option value="Beagle Harrier">Beagle Harrier</option>
							<option value="Beauceron">Beauceron</option>
							<option value="Bedlington Terrier">Bedlington Terrier</option>
							<option value="Bichón Boloñés">Bichón Boloñés</option>
							<option value="Bichón Frisé o Bichon de Tenerife">Bichón Frisé o Bichon de Tenerife</option>
							<option value="Bichón Habanero">Bichón Habanero</option>
							<option value="Bichón Maltés o Maltés">Bichón Maltés o Maltés</option>
							<option value="Billy">Billy</option>
							<option value="Bisben">Bisben</option>
							<option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
							<option value="Bloodhound o Perro de San Huberto">Bloodhound o Perro de San Huberto</option>
							<option value="Bobtail">Bobtail</option>
							<option value="Boerboel">Boerboel</option>
							<option value="Border Collie o Collie de la Frontera">Border Collie o Collie de la Frontera</option>
							<option value="Border Terrier">Border Terrier</option>
							<option value="Borzoi">Borzoi</option>
							<option value="Bosnian Hound">Bosnian Hound</option>
							<option value="Boston Terrier">Boston Terrier</option>
							<option value="Bouvier des Flandres">Bouvier des Flandres</option>
							<option value="Boxer">Boxer</option>
							<option value="Boyero de Appenzell">Boyero de Appenzell</option>
							<option value="Boyero de Australia">Boyero de Australia</option>
							<option value="Boyero de Berna">Boyero de Berna</option>
							<option value="Boyero de Entlebuch">Boyero de Entlebuch</option>
							<option value="Boyero de Flandes">Boyero de Flandes</option>
							<option value="Boyero de las Ardenas">Boyero de las Ardenas</option>
							<option value="Boyero de Montaña Bernes">Boyero de Montaña Bernes</option>
							<option value="Braco Alemán de pelo corto">Braco Alemán de pelo corto</option>
							<option value="Braco Alemán de pelo duro">Braco Alemán de pelo duro</option>
							<option value="Braco de Ariege">Braco de Ariege</option>
							<option value="Braco de Auvernia">Braco de Auvernia</option>
							<option value="Braco de Bourbonnais">Braco de Bourbonnais</option>
							<option value="Braco de Saint Germain">Braco de Saint Germain</option>
							<option value="Braco de Weimar">Braco de Weimar</option>
							<option value="Braco Dupuy">Braco Dupuy</option>
							<option value="Braco Francés">Braco Francés</option>
							<option value="Braco Italiano">Braco Italiano</option>
							<option value="Broholmer">Broholmer</option>
							<option value="Buhund Noruego">Buhund Noruego</option>
							<option value="Bull Terrier o Bull Terrier Inglés">Bull Terrier o Bull Terrier Inglés</option>
							<option value="Bulldog o Bulldog Inglés">Bulldog o Bulldog Inglés</option>
							<option value="Bulldog Americano o American Bulldog">Bulldog Americano o American Bulldog</option>
							<option value="Bulldog Francés">Bulldog Francés</option>
							<option value="Bullenbeisser">Bullenbeisser</option>
							<option value="Bullmastiff">Bullmastiff</option>
							<option value="Ca de Bestiar">Ca de Bestiar</option>
							<option value="Cairn Terrier">Cairn Terrier</option>
							<option value="Can de Palleiro">Can de Palleiro</option>
							<option value="Cane Corso">Cane Corso</option>
							<option value="Cane da Pastore Maremmano-Abruzzese">Cane da Pastore Maremmano-Abruzzese</option>
							<option value="Caniche">Caniche</option>
							<option value="Cão de água português">Cão de água português</option>
							<option value="Cão da Serra de Aires">Cão da Serra de Aires</option>
							<option value="Cão da Serra de Estrela">Cão da Serra de Estrela</option>
							<option value="Cão de Castro Laboreiro">Cão de Castro Laboreiro</option>
							<option value="Cão de Fila de Sao Miguel">Cão de Fila de Sao Miguel</option>
							<option value="Carlino o Pug">Carlino o Pug</option>
							<option value="Catalburun">Catalburun</option>
							<option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
							<option value="Cesky Fousek">Cesky Fousek</option>
							<option value="Ceský Teriér">Ceský Teriér</option>
							<option value="Chesapeake Bay Retriever">Chesapeake Bay Retriever</option>
							<option value="Chihuahua o Chihuahueño">Chihuahua o Chihuahueño</option>
							<option value="Chongqing">Chongqing</option>
							<option value="Chow Chow">Chow Chow</option>
							<option value="Cirneco del Etna">Cirneco del Etna</option>
							<option value="Clumber Spaniel">Clumber Spaniel</option>
							<option value="Cocker Spaniel Americano">Cocker Spaniel Americano</option>
							<option value="Cocker Spaniel Inglés">Cocker Spaniel Inglés</option>
							<option value="Collie">Collie</option>
							<option value="Collie Barbudo">Collie Barbudo</option>
							<option value="Collie de pelo corto">Collie de pelo corto</option>
							<option value="Collie de pelo largo">Collie de pelo largo</option>
							<option value="Coonhound Negro y Bronce">Coonhound Negro y Bronce</option>
							<option value="Corgi Galés de Cardigan">Corgi Galés de Cardigan</option>
							<option value="Corgi Galés de Pembroke">Corgi Galés de Pembroke</option>
							<option value="Corgi Gales Pembroke">Corgi Gales Pembroke</option>
							<option value="Coton de Tuléar">Coton de Tuléar</option>
							<option value="Crestado Chino o Chino Crestado">Crestado Chino o Chino Crestado</option>
							<option value="Crestado Rodesiano">Crestado Rodesiano</option>
							<option value="Curly Coated Retriever">Curly Coated Retriever</option>
							<option value="Cuvac Eslovaco">Cuvac Eslovaco</option>
							<option value="Dachshund o Perro Salchicha">Dachshund o Perro Salchicha</option>
							<option value="Dálmata">Dálmata</option>
							<option value="Dandie Dinmont Terrier">Dandie Dinmont Terrier</option>
							<option value="Dingo">Dingo</option>
							<option value="Dóberman o Dobermann">Dóberman o Dobermann</option>
							<option value="Dogo Argentino">Dogo Argentino</option>
							<option value="Dogo de Burdeos o Bulldog de Burdeos">Dogo de Burdeos o Bulldog de Burdeos</option>
							<option value="Dogo de Cerdeña">Dogo de Cerdeña</option>
							<option value="Dogo del Tibet o Mastín Tibetano">Dogo del Tibet o Mastín Tibetano</option>
							<option value="Dogo Guatemalteco">Dogo Guatemalteco</option>
							<option value="Dogo Mallorquín">Dogo Mallorquín</option>
							<option value="Drentse Partridge Dog">Drentse Partridge Dog</option>
							<option value="Drever">Drever</option>
							<option value="Dunker">Dunker</option>
							<option value="Elkhound Noruego">Elkhound Noruego</option>
							<option value="Elkhound Sueco">Elkhound Sueco</option>
							<option value="English Foxhound">English Foxhound</option>
							<option value="English Springer Spaniel">English Springer Spaniel</option>
							<option value="English Toy Terrier">English Toy Terrier</option>
							<option value="Epagneul Papillón o Papillón">Epagneul Papillón o Papillón</option>
							<option value="Epagneul Picard">Epagneul Picard</option>
							<option value="Esquimal Americano">Esquimal Americano</option>
							<option value="Esquimal Canadiense">Esquimal Canadiense</option>
							<option value="Eurasier">Eurasier</option>
							<option value="Fila Brasilero o Fila Brasileiro">Fila Brasilero o Fila Brasileiro</option>
							<option value="Finnish Lapphound">Finnish Lapphound</option>
							<option value="Finnish Spitz">Finnish Spitz</option>
							<option value="Flat Coated Retriever">Flat Coated Retriever</option>
							<option value="Fox Terrier">Fox Terrier</option>
							<option value="Fox Terrier Chileno">Fox Terrier Chileno</option>
							<option value="Fox terrier de pelo de alambre">Fox terrier de pelo de alambre</option>
							<option value="Fox terrier de pelo liso">Fox terrier de pelo liso</option>
							<option value="Foxhound Inglés">Foxhound Inglés</option>
							<option value="Frisian Pointer">Frisian Pointer</option>
							<option value="Galgo Español">Galgo Español</option>
							<option value="Galgo Húngaro">Galgo Húngaro</option>
							<option value="Galgo Inglés">Galgo Inglés</option>
							<option value="Galgo Italiano">Galgo Italiano</option>
							<option value="Galgo Polaco">Galgo Polaco</option>
							<option value="Glen of Imaal Terrier">Glen of Imaal Terrier</option>
							<option value="Golden Retriever o Cobrador Dorado">Golden Retriever o Cobrador Dorado</option>
							<option value="Gordon Setter">Gordon Setter</option>
							<option value="Gos d'Atura Catalá">Gos d'Atura Catalá</option>
							<option value="Gran Basset Griffon Vendeano">Gran Basset Griffon Vendeano</option>
							<option value="Gran Boyero Suizo">Gran Boyero Suizo</option>
							<option value="Gran Danés o Dogo Alemán">Gran Danés o Dogo Alemán</option>
							<option value="Gran Gascón Saintongeois">Gran Gascón Saintongeois</option>
							<option value="Gran Griffon Vendeano">Gran Griffon Vendeano</option>
							<option value="Gran Munsterlander">Gran Munsterlander</option>
							<option value="Gran Perro Japonés">Gran Perro Japonés</option>
							<option value="Grand Anglo Francais Tricoleur">Grand Anglo Francais Tricoleur</option>
							<option value="Grand Bleu de Gascogne">Grand Bleu de Gascogne</option>
							<option value="Greyhound">Greyhound</option>
							<option value="Griffon Bleu de Gascogne">Griffon Bleu de Gascogne</option>
							<option value="Griffon de pelo duro">Griffon de pelo duro</option>
							<option value="Griffon Leonado de Bretaña">Griffon Leonado de Bretaña</option>
							<option value="Griffon Nivernais">Griffon Nivernais</option>
							<option value="Grifón Belga">Grifón Belga</option>
							<option value="Grifón de Bruselas">Grifón de Bruselas</option>
							<option value="Gull Dong">Gull Dong</option>
							<option value="Gull Terr">Gull Terr</option>
							<option value="Haldenstoever">Haldenstoever</option>
							<option value="Harrier">Harrier</option>
							<option value="Hokkaido">Hokkaido</option>
							<option value="Hovawart">Hovawart</option>
							<option value="Husky Siberiano, Keshia o Shusha">Husky Siberiano, Keshia o Shusha</option>
							<option value="Ioujnorousskaia Ovtcharka">Ioujnorousskaia Ovtcharka</option>
							<option value="Irish Glen of Imaal Terrier">Irish Glen of Imaal Terrier</option>
							<option value="Irish Soft Coated Wheaten Terrier">Irish Soft Coated Wheaten Terrier</option>
							<option value="Irish Terrier">Irish Terrier</option>
							<option value="Irish Water Spaniel">Irish Water Spaniel</option>
							<option value="Irish Wolfhound">Irish Wolfhound</option>
							<option value="Jack Russell Terrier">Jack Russell Terrier</option>
							<option value="Jämthund">Jämthund</option>
							<option value="Jindo Coreano">Jindo Coreano</option>
							<option value="Kai">Kai</option>
							<option value="Keeshond, Spitz Lobo o Wolfspitz">Keeshond, Spitz Lobo o Wolfspitz</option>
							<option value="Kelpie Australiano">Kelpie Australiano</option>
							<option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
							<option value="King Charles Spaniel">King Charles Spaniel</option>
							<option value="Kishu">Kishu</option>
							<option value="Komondor o Ovejero Hungaro">Komondor o Ovejero Hungaro</option>
							<option value="Kooiker">Kooiker</option>
							<option value="Kopov Eslovaco">Kopov Eslovaco</option>
							<option value="Kritikos Lagonikos">Kritikos Lagonikos</option>
							<option value="Kromfohrländer">Kromfohrländer</option>
							<option value="Kuchi">Kuchi</option>
							<option value="Kurī">Kurī</option>
							<option value="Kuvasz o Kuvaszok">Kuvasz o Kuvaszok</option>
							<option value="Labrador Retriever o Labrador">Labrador Retriever o Labrador</option>
							<option value="Lagotto Romagnolo">Lagotto Romagnolo</option>
							<option value="Laika de Siberia Occidental">Laika de Siberia Occidental</option>
							<option value="Laika de Siberia Oriental">Laika de Siberia Oriental</option>
							<option value="Laika Ruso Europeo">Laika Ruso Europeo</option>
							<option value="Lakeland Terrier">Lakeland Terrier</option>
							<option value="Landseer">Landseer</option>
							<option value="Lapphund Sueco">Lapphund Sueco</option>
							<option value="Lebrel Afgano">Lebrel Afgano</option>
							<option value="Lebrel Arabe">Lebrel Arabe</option>
							<option value="Lebrel Escocés o Deerhound">Lebrel Escocés o Deerhound</option>
							<option value="Leonberger">Leonberger</option>
							<option value="Lhassa Terrier o Lhasa Apso">Lhassa Terrier o Lhasa Apso</option>
							<option value="Lobero irlandés o Cazador de Lobos Irlandés">Lobero irlandés o Cazador de Lobos Irlandés</option>
							<option value="Longdog">Longdog</option>
							<option value="Lowchen">Lowchen</option>
							<option value="Lundehund Noruego">Lundehund Noruego</option>
							<option value="Lurcher">Lurcher</option>
							<option value="Majorero">Majorero</option>
							<option value="Manchester Terrier">Manchester Terrier</option>
							<option value="Mastiff">Mastiff</option>
							<option value="Mastín Afgano">Mastín Afgano</option>
							<option value="Mastín Americano">Mastín Americano</option>
							<option value="Mastín de Borinquen">Mastín de Borinquen</option>
							<option value="Mastín de Kumaon">Mastín de Kumaon</option>
							<option value="Mastín de los Alpes">Mastín de los Alpes</option>
							<option value="Mastín del Pirineo">Mastín del Pirineo</option>
							<option value="Mastín Español">Mastín Español</option>
							<option value="Mastín Inglés">Mastín Inglés</option>
							<option value="Mastín Napolitano">Mastín Napolitano</option>
							<option value="Mudi">Mudi</option>
							<option value="Norfolk Terrier">Norfolk Terrier</option>
							<option value="Norwich Terrier">Norwich Terrier</option>
							<option value="Nova Scotia Duck Tolling Retriever">Nova Scotia Duck Tolling Retriever</option>
							<option value="Otterhound">Otterhound</option>
							<option value="Parson Russell Terrier">Parson Russell Terrier</option>
							<option value="Pastor Alemán o Ovejero Alemán">Pastor Alemán o Ovejero Alemán</option>
							<option value="Pastor Americano">Pastor Americano</option>
							<option value="Pastor Australiano">Pastor Australiano</option>
							<option value="Pastor Belga">Pastor Belga</option>
							<option value="Pastor Belga Groenendael">Pastor Belga Groenendael</option>
							<option value="Pastor Belga Laekenois">Pastor Belga Laekenois</option>
							<option value="Pastor Belga Malinois">Pastor Belga Malinois</option>
							<option value="Pastor Belga Tervueren">Pastor Belga Tervueren</option>
							<option value="Pastor Bergamasco">Pastor Bergamasco</option>
							<option value="Pastor Blanco Suizo">Pastor Blanco Suizo</option>
							<option value="Pastor Catalán">Pastor Catalán</option>
							<option value="Pastor Caucásico">Pastor Caucásico</option>
							<option value="Pastor Croata">Pastor Croata</option>
							<option value="Pastor de Anatolia">Pastor de Anatolia</option>
							<option value="Pastor de Asia Central">Pastor de Asia Central</option>
							<option value="Pastor de Beauce">Pastor de Beauce</option>
							<option value="Pastor de Bosnia-Herzegovina y Croacia">Pastor de Bosnia-Herzegovina y Croacia</option>
							<option value="Pastor de Brie o Briard">Pastor de Brie o Briard</option>
							<option value="Pastor de Istria">Pastor de Istria</option>
							<option value="Pastor de Laponia">Pastor de Laponia</option>
							<option value="Pastor de los Cárpatos">Pastor de los Cárpatos</option>
							<option value="Pastor de los Pirineos">Pastor de los Pirineos</option>
							<option value="Pastor de Maremma">Pastor de Maremma</option>
							<option value="Pastor de Shetland">Pastor de Shetland</option>
							<option value="Pastor de Tatra">Pastor de Tatra</option>
							<option value="Pastor de Valée">Pastor de Valée</option>
							<option value="Pastor del Atlas">Pastor del Atlas</option>
							<option value="Pastor del Cáucaso">Pastor del Cáucaso</option>
							<option value="Pastor del Sur de Rusia">Pastor del Sur de Rusia</option>
							<option value="Pastor Ganadero Australiano">Pastor Ganadero Australiano</option>
							<option value="Pastor Garafiano">Pastor Garafiano</option>
							<option value="Pastor Holandés">Pastor Holandés</option>
							<option value="Pastor Inglés">Pastor Inglés</option>
							<option value="Pastor Islandés">Pastor Islandés</option>
							<option value="Pastor Lapón">Pastor Lapón</option>
							<option value="Pastor Leonés">Pastor Leonés</option>
							<option value="Pastor Mallorquín">Pastor Mallorquín</option>
							<option value="Pastor Picard">Pastor Picard</option>
							<option value="Pastor Polaco de las Llanuras">Pastor Polaco de las Llanuras</option>
							<option value="Pastor Polaco de Podhale">Pastor Polaco de Podhale</option>
							<option value="Pastor Vasco">Pastor Vasco</option>
							<option value="Pekinés o Pequinés">Pekinés o Pequinés</option>
							<option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
							<option value="Pequeño Brabanzón">Pequeño Brabanzón</option>
							<option value="Pequeño Lebrel Italiano">Pequeño Lebrel Italiano</option>
							<option value="Pequeño Munsterlander">Pequeño Munsterlander</option>
							<option value="Pequeño Perro León">Pequeño Perro León</option>
							<option value="Perdiguero de Burgos">Perdiguero de Burgos</option>
							<option value="Perdiguero Francés">Perdiguero Francés</option>
							<option value="Perdiguero Portugués">Perdiguero Portugués</option>
							<option value="Perro de Agua Americano">Perro de Agua Americano</option>
							<option value="Perro de Agua Español o Turco Andaluz">Perro de Agua Español o Turco Andaluz</option>
							<option value="Perro de Agua Francés">Perro de Agua Francés</option>
							<option value="Perro de Agua Frisón">Perro de Agua Frisón</option>
							<option value="Perro de Agua Irlandés">Perro de Agua Irlandés</option>
							<option value="Perro de Agua Portugués">Perro de Agua Portugués</option>
							<option value="Perro de Canaan">Perro de Canaan</option>
							<option value="Perro de Groenlandia">Perro de Groenlandia</option>
							<option value="Perro de los Visigodos">Perro de los Visigodos</option>
							<option value="Perro de Montaña de los Pirineos">Perro de Montaña de los Pirineos</option>
							<option value="Perro de Osos de Carelia">Perro de Osos de Carelia</option>
							<option value="Perro de Presa Español">Perro de Presa Español</option>
							<option value="Perro de Presa Mallorquín">Perro de Presa Mallorquín</option>
							<option value="Perro de San Juan o Terranova Menor">Perro de San Juan o Terranova Menor</option>
							<option value="Perro del Faraón">Perro del Faraón</option>
							<option value="Perro Happa">Perro Happa</option>
							<option value="Perro Lobo Checoslovaco">Perro Lobo Checoslovaco</option>
							<option value="Perro Pastor de las Islas Shetland">Perro Pastor de las Islas Shetland</option>
							<option value="Perro sin pelo de Perú">Perro sin pelo de Perú</option>
							<option value="Petit Basset Griffon Vendeen">Petit Basset Griffon Vendeen</option>
							<option value="Petit Blue de Gascogne">Petit Blue de Gascogne</option>
							<option value="Phalène">Phalène</option>
							<option value="Pinscher">Pinscher</option>
							<option value="Pinscher Alemán">Pinscher Alemán</option>
							<option value="Pinscher Austríaco de pelo corto">Pinscher Austríaco de pelo corto</option>
							<option value="Pinscher Miniatura">Pinscher Miniatura</option>
							<option value="Podenco Andaluz">Podenco Andaluz</option>
							<option value="Podenco Canario">Podenco Canario</option>
							<option value="Podenco Ibicenco">Podenco Ibicenco</option>
							<option value="Podenco Portugués">Podenco Portugués</option>
							<option value="Pointer Inglés o Pointer">Pointer Inglés o Pointer</option>
							<option value="Poitevin">Poitevin</option>
							<option value="Pomerania">Pomerania</option>
							<option value="Porcelana">Porcelana</option>
							<option value="Presa Canario">Presa Canario</option>
							<option value="Puli, Pulik o Hungarian Puli">Puli, Pulik o Hungarian Puli</option>
							<option value="Pumi">Pumi</option>
							<option value="Rafeiro do Alentejo">Rafeiro do Alentejo</option>
							<option value="Ratonero Bodeguero Andaluz">Ratonero Bodeguero Andaluz</option>
							<option value="Ratonero Mallorquín">Ratonero Mallorquín</option>
							<option value="Ratonero Valenciano">Ratonero Valenciano</option>
							<option value="Retriever de Nueva Escocia">Retriever de Nueva Escocia</option>
							<option value="Rhodesian Ridgeback">Rhodesian Ridgeback</option>
							<option value="Ridgeback de Tailandia">Ridgeback de Tailandia</option>
							<option value="Rottweiler">Rottweiler</option>
							<option value="Saarloos">Saarloos</option>
							<option value="Sabueso de Hamilton">Sabueso de Hamilton</option>
							<option value="Sabueso de Hannover">Sabueso de Hannover</option>
							<option value="Sabueso de Hygen">Sabueso de Hygen</option>
							<option value="Sabueso de Istria">Sabueso de Istria</option>
							<option value="Sabueso de Posavaz">Sabueso de Posavaz</option>
							<option value="Sabueso de Schiller">Sabueso de Schiller</option>
							<option value="Sabueso de Smaland">Sabueso de Smaland</option>
							<option value="Sabueso de Transilvania">Sabueso de Transilvania</option>
							<option value="Sabueso del Tirol">Sabueso del Tirol</option>
							<option value="Sabueso Español">Sabueso Español</option>
							<option value="Sabueso Estirio de pelo duro">Sabueso Estirio de pelo duro</option>
							<option value="Sabueso Finlandés">Sabueso Finlandés</option>
							<option value="Sabueso Francés blanco y negro">Sabueso Francés blanco y negro</option>
							<option value="Sabueso Francés tricolor">Sabueso Francés tricolor</option>
							<option value="Sabueso Griego">Sabueso Griego</option>
							<option value="Sabueso Polaco">Sabueso Polaco</option>
							<option value="Sabueso Serbio">Sabueso Serbio</option>
							<option value="Sabueso Suizo">Sabueso Suizo</option>
							<option value="Sabueso Yugoslavo de Montaña">Sabueso Yugoslavo de Montaña</option>
							<option value="Sabueso Yugoslavo tricolor">Sabueso Yugoslavo tricolor</option>
							<option value="Saluki">Saluki</option>
							<option value="Samoyedo, Samoyed o Bjelkier">Samoyedo, Samoyed o Bjelkier</option>
							<option value="San Bernardo">San Bernardo</option>
							<option value="Sarplaninac">Sarplaninac</option>
							<option value="Sato">Sato</option>
							<option value="Schapendoes">Schapendoes</option>
							<option value="Schipperke">Schipperke</option>
							<option value="Schnauzer">Schnauzer</option>
							<option value="Schnauzer estándar">Schnauzer estándar</option>
							<option value="Schnauzer gigante">Schnauzer gigante</option>
							<option value="Schnauzer miniatura">Schnauzer miniatura</option>
							<option value="Scottish Terrier">Scottish Terrier</option>
							<option value="Sealyham Terrier">Sealyham Terrier</option>
							<option value="Segugio Italiano">Segugio Italiano</option>
							<option value="Seppala Siberiano">Seppala Siberiano</option>
							<option value="Setter Inglés">Setter Inglés</option>
							<option value="Setter Irlandés o Setter Irlandés Rojo">Setter Irlandés o Setter Irlandés Rojo</option>
							<option value="Setter Irlandés rojo y blanco">Setter Irlandés rojo y blanco</option>
							<option value="Shar Pei">Shar Pei</option>
							<option value="Shiba Inu">Shiba Inu</option>
							<option value="Shih Tzu">Shih Tzu</option>
							<option value="Shikoku">Shikoku</option>
							<option value="Skye Terrier">Skye Terrier</option>
							<option value="Slovensky Cuvac">Slovensky Cuvac</option>
							<option value="Slovensky Kopov">Slovensky Kopov</option>
							<option value="Smoushond Holandés">Smoushond Holandés</option>
							<option value="Spaniel Alemán">Spaniel Alemán</option>
							<option value="Spaniel Azul de Picardía">Spaniel Azul de Picardía</option>
							<option value="Spaniel Bretón">Spaniel Bretón</option>
							<option value="Spaniel Continental enano">Spaniel Continental enano</option>
							<option value="Spaniel de Campo">Spaniel de Campo</option>
							<option value="Spaniel de Pont Audemer">Spaniel de Pont Audemer</option>
							<option value="Spaniel Francés">Spaniel Francés</option>
							<option value="Spaniel Japonés o Chin Japonés">Spaniel Japonés o Chin Japonés</option>
							<option value="Spaniel Tibetano o Spaniel del Tibet">Spaniel Tibetano o Spaniel del Tibet</option>
							<option value="Spinone Italiano">Spinone Italiano</option>
							<option value="Spítz Alemán">Spítz Alemán</option>
							<option value="Spitz de Norbotten">Spitz de Norbotten</option>
							<option value="Spitz Finlandés">Spitz Finlandés</option>
							<option value="Spitz Japonés">Spitz Japonés</option>
							<option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
							<option value="Staffordshire Terrier Americano">Staffordshire Terrier Americano</option>
							<option value="Sussex Spaniel">Sussex Spaniel</option>
							<option value="Tchuvatch Eslovaco">Tchuvatch Eslovaco</option>
							<option value="Teckel">Teckel</option>
							<option value="Terranova o Terranova Mayor">Terranova o Terranova Mayor</option>
							<option value="Terrier Alemán">Terrier Alemán</option>
							<option value="Terrier Australiano">Terrier Australiano</option>
							<option value="Terrier Brasileño">Terrier Brasileño</option>
							<option value="Terrier Cazador Alemán">Terrier Cazador Alemán</option>
							<option value="Terrier Checo">Terrier Checo</option>
							<option value="Terrier Escocés">Terrier Escocés</option>
							<option value="Terrier Galés">Terrier Galés</option>
							<option value="Terrier Irlandés">Terrier Irlandés</option>
							<option value="Terrier Japonés">Terrier Japonés</option>
							<option value="Terrier Negro Ruso">Terrier Negro Ruso</option>
							<option value="Terrier Tibetano">Terrier Tibetano</option>
							<option value="Tosa">Tosa</option>
							<option value="Viejo Pastor Inglés">Viejo Pastor Inglés</option>
							<option value="Viejo Pointer Danés">Viejo Pointer Danés</option>
							<option value="Vizsla">Vizsla</option>
							<option value="Volpino Italiano">Volpino Italiano</option>
							<option value="Weimaraner">Weimaraner</option>
							<option value="Welsh Corgi Cardigan">Welsh Corgi Cardigan</option>
							<option value="Welsh Corgi Pembroke">Welsh Corgi Pembroke</option>
							<option value="Welsh Springer Spaniel">Welsh Springer Spaniel</option>
							<option value="Welsh Terrier">Welsh Terrier</option>
							<option value="West Highland White Terrier">West Highland White Terrier</option>
							<option value="Whippet">Whippet</option>
							<option value="Wirehaired Solvakian Pointer">Wirehaired Solvakian Pointer</option>
							<option value="Xoloitzcuintle">Xoloitzcuintle</option>
							<option value="Yorkshire Terrier">Yorkshire Terrier</option>

						</select>

					</div>

					<button type="submit" class="btn btn-default">
						Submit
					</button>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Cancelar
				</button>
				<button type="button" class="btn btn-primary">
					Enviar Mascota
				</button>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->