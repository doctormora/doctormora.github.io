// Your web app's Firebase configuration
  var firebaseConfig = {
    //***ATENCIÓN***//
    //AQUÍ VA EL SDK QUE TE GENERE TÚ FIREBASE//

    apiKey: "AIzaSyDrcxatf7CvBsBIf8PN7dqm14haChcrQHI",
    authDomain: "drmora1.firebaseapp.com",
    databaseURL: "https://drmora1.firebaseio.com",
    projectId: "drmora1",
    storageBucket: "drmora1.appspot.com",
    messagingSenderId: "949755647979",
    appId: "1:949755647979:web:014db4fd8ce14f30172bae"

    
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.database();
  coleccionCasos = db.ref().child('casos');
  bodyCasos = $('#corodatos').val();
  //console.log(bodyProductos);  
  
  
  function mostrarCasos({activos, recuperados, defunciones, investigacion}){
    return `
          <div class="card">
           
            <div class="card-body">
            <h5 class="card-title">${activos}</h5>
            <p class="card-text">Casos Activos</p>
            </div>
          </div>
      
         
          <div class="card">
            
            <div class="card-body">
            <h5 class="card-title">${recuperados}</h5>
            <p class="card-text">Recuperados</p>
            </div>
          </div>
         
         
          <div class="card">
            
            <div class="card-body">
            <h5 class="card-title">${defunciones}</h5>
            <p class="card-text">Defunciones</p>
            </div>
          </div>
         
        
          <div class="card">
      
            <div class="card-body">
            <h5 class="card-title">${investigacion}</h5>
            <p class="card-text">Investigación</p>
            </div>
          </div>
    `
  };
  //CHILD_ADDED
  coleccionCasos.on('child_added', data =>{
    let div = document.createElement('div')
    div.id = data.key
    div.innerHTML = mostrarCasos(data.val())
    document.getElementById('corodatos').appendChild(div)
  });
  //CHILD_CHANGED
  coleccionCasos.on('child_changed', data =>{
    let nodoEditado = document.getElementById(data.key)
    nodoEditado.innerHTML = mostrarCasos(data.val())
  });
  //CHILD_REMOVED
  coleccionCasos.on('child_removed', data =>{
    let nodoEditado = document.getElementById(data.key)
    document.getElementById('corodatos').removeChild(nodoEditado)
  });
  //Programación de los botones
  