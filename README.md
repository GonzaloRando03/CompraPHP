# Aplicación para compra de frutas y generación de tickets

*Nombre: Gonzalo*

*Apellidos: Rando Serna*


## Resumen
Aplicación Web programada únicamente en PHP usando WAMP donde podrás registrarte como vendedor de una frutería y poder realizar los cobros y los tickets para tus clientes.
Cada compra se guarda en una base de datos MySQL con sus datos y los tickets. 



## Funcionamiento
### Login
Al entrar a la página nos aparece el login, donde tendremos que introducir el usuario y contraseña del frutero.

![image](https://user-images.githubusercontent.com/103594582/199940249-bed2615b-9037-42ba-8f39-20de2b83a3b1.png)

Estos datos se guardan en la siguiente tabla de la base de datos:

<pre>
CREATE TABLE users (
    username varchar(40),
    password varchar(100),
    constraint pkname primary key(username)
);
</pre>

La contraseña en la base de datos va cifrada y se comprueba al iniciar sesión.

![image](https://user-images.githubusercontent.com/103594582/199942623-3bee57e4-70cd-4132-829c-bf2669ca24a7.png)


### Nueva compra

Al iniciar sesión con el usuario y contraseña correctos aparecemos en el menú principal donde podemos añadir las compras

![image](https://user-images.githubusercontent.com/103594582/199942889-928fca45-b0aa-4462-9722-6f87be74e253.png)

Si pulsamos el botón de nueva compra nos aparece un formulario para añadir una compra nueva

![image](https://user-images.githubusercontent.com/103594582/199943785-944d1cee-1266-4eea-8d32-1be0f2131322.png)

Lo rellenamos y al pulsar en comprar se nos descarga un PDF con un ticket de la compra.

![image](https://user-images.githubusercontent.com/103594582/199943954-637bee81-86c3-4798-8133-fe6723ca0492.png)

El ticket tiene el siguiente contenido.

![image](https://user-images.githubusercontent.com/103594582/199944059-bbb32e65-4cca-4f7a-acd1-338f722ea70e.png)


### Ver compras

Las compras se guardan en la siguiente tabla de la base de datos:
 
<pre>
CREATE TABLE compras (
    fecha varchar(20),
    naranjas decimal(5,2),
    precioNaranjas decimal(5,2),
    manzanas decimal(5,2),
    precioManzanas decimal(5,2),
    peras decimal(5,2),
    precioPeras decimal(5,2),
    fresas decimal(5,2),
    precioFresas decimal(5,2),
    melocotones decimal(5,2),
    precioMelocotones decimal(5,2),
    kiwis decimal(5,2),
    precioKiwis decimal(5,2),
    precioTotal decimal(5,2),
    constraint pkdate primary key(fecha)
);
</pre>

Puedes ver el registro de las compras en "Ver compras", donde tenemos una tabla con los datos de todas las compras y un botón para descargar el ticket

![image](https://user-images.githubusercontent.com/103594582/199945957-5ad6a632-6fc9-40ef-b560-c632fa3d5508.png)

Podemos descargar el ticket de una compra vieja.
![image](https://user-images.githubusercontent.com/103594582/199946156-84cc16ed-9f82-4098-8c97-d29a477dcd27.png)
![image](https://user-images.githubusercontent.com/103594582/199946204-87680a19-91be-43a6-b8c0-1375ebf80a4a.png)


