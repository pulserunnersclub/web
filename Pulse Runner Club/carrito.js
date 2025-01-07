// Carrito y estilos
const carrito = [];
const contenedorCarrito = document.createElement('div');
contenedorCarrito.id = 'carrito';
contenedorCarrito.style = `
  position: relative; 
  top: 10px; 
  left: 64.5px; 
  background: white; 
  border: 1px solid #6E6E6E; 
  border-radius: 10px;
  padding: 15px; 
  width: 300px; 
  max-height: 500px; 
  overflow-y: auto;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
`;

// Inicializar EmailJS
(function () {
    emailjs.init("hmi15nNk38w32Npwx"); // Reemplaza con tu Public Key
})();

// Función para calcular el total del carrito
const calcularTotal = () => {
  return carrito.reduce((total, item) => total + parseFloat(item.precio || 0), 0).toFixed(3);
};

// Actualizar contenido del carrito
const actualizarCarrito = () => {
  contenedorCarrito.innerHTML = '<h3 style="color: #6E6E6E; text-align: center;">Carrito de Compras</h3>';
  carrito.forEach((item, index) => {
    const producto = document.createElement('div');
    producto.style = `
      display: flex; 
      justify-content: space-between; 
      align-items: center; 
      padding: 8px 0;
      border-bottom: 1px solid #ccc;
    `;
    producto.innerHTML = `
      <span style="flex: 1;">${item.nombre}</span>
      <span style="flex: 0.5; text-align: right; font-family: monospace;">&#8353;${parseFloat(item.precio).toFixed(3)}</span>
      <button data-index="${index}" 
        style="
          background: #D897DE; 
          color: white; 
          border: none; 
          padding: 5px 10px; 
          cursor: pointer; 
          border-radius: 5px;
          margin-left: 10px;">
        X
      </button>
    `;
    producto.querySelector('button').onclick = (e) => {
      const idx = e.target.getAttribute('data-index');
      carrito.splice(idx, 1);
      actualizarCarrito();
    };
    contenedorCarrito.appendChild(producto);
  });
  if (carrito.length === 0) {
    contenedorCarrito.innerHTML += '<p style="color: gray; text-align: center;">El carrito está vacío</p>';
  }
  const totalDiv = document.createElement('div');
  totalDiv.style = `
    margin-top: 10px; 
    text-align: rigth; 
    font-weight: bold; 
    font-size: 18px; 
    color: #6E6E6E;
    font-family: monospace;
  `;
  totalDiv.innerHTML = `Total: &#8353;${calcularTotal()}`;
  contenedorCarrito.appendChild(totalDiv);
};

document.body.appendChild(contenedorCarrito);
actualizarCarrito();

// Agregar productos al carrito
document.querySelectorAll('.btn-agregar').forEach((btn) => {
  btn.addEventListener('click', () => {
    const nombre = btn.getAttribute('data-nombre');
    const precio = parseFloat(btn.getAttribute('data-precio')); // Asegurarse de que el precio sea un número
    carrito.push({ nombre, precio });
    actualizarCarrito();
  });
});

// Formulario de envío de la orden
const checkoutForm = document.createElement('div');
checkoutForm.innerHTML = `
  <form id="order-form" style="
  position: relative; 
  top: 20px; 
  left: 64.5px; 
    background: white; 
    border: 1px solid #6E6E6E; 
    border-radius: 10px; 
    padding: 15px; 
    width: 300px; 
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    <h3 style="color: #6E6E6E; text-align: center;">ORDEN<br>
    Este gmail se tomara en cuenta para contactarte.</h3>
    <label for="phone">Gmail y telefono:</label>
    <input id="phone" type="text" style="width: 100%; margin-bottom: 10px;" required />
    <button type="submit" style="
      background: #D897DE; 
      color: white; 
      border: none; 
      padding: 10px; 
      width: 100%; 
      cursor: pointer; 
      border-radius: 5px;">Enviar Orden</button>
  </form>
`;
document.body.appendChild(checkoutForm);

// Enviar correo con los detalles del carrito
document.getElementById("order-form").addEventListener("submit", (e) => {
  e.preventDefault();

  const phone = document.getElementById("phone").value;

  if (carrito.length === 0) {
    alert("El carrito está vacío. Por favor añade productos.");
    return;
  }

  // Formatear los detalles del carrito
  const productDetails = carrito
    .map((item) => `${item.nombre}: &#8353;${parseFloat(item.precio).toFixed(3)}`)
    .join("\n");

  const templateParams = {
    phone: phone, // Gmail de teléfono del cliente
    order_details: productDetails, // Detalles del carrito
  };
  //Configuracion de emailjs
  emailjs
    .send("service_5ghoghv", "template_35ae8ys", templateParams)
    .then(() => {
      alert("Orden enviada exitosamente.");
      carrito.length = 0; // Vaciar el carrito después de enviar
      actualizarCarrito();
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Hubo un problema al enviar tu orden. Inténtalo de nuevo.");
    });
});