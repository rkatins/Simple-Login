# 🚗 Garage/Concesionario
> [!NOTE]
> Hace uso de una **Base de datos 💾** para el manejo de usuarios y del garaje.

## ✨ Funcionalidades Principales
* ➕ Añadir y Borrar Coches: Se nos permite **añadir** un nuevo coche a nuestro garaje o **borrar** uno existente.
* 🔍 Funcionalidad de Búsqueda: También dispone de la funcionalidad de buscar por _marca_.

## 🔑 Requisito de Acceso
⚠️ **Acceso Seguro:** Para acceder al garaje/concesionario se requiere pasar por un **LOGIN** (_iniciar sesión_) o registrarnos en la APP para ver el listado de coches.

### 🛡️ Seguridad y Persistencia de Datos
Para el correcto funcionamiento, la **Base de Datos (BD)** requiere de dos tablas principales: `garaje` y `usuario`.

> [!NOTE]
> **Cifrado de Contraseñas:** Las contraseñas se almacenan de forma **segura** en la BD utilizando la función de **hash** **`sha256`**.

> **Definición de Algoritmos:** Los métodos de **hash** disponibles están definidos y declarados en un _array -> [HashAlgo.php](./assets/php/HashAlgo.php)

---

# 🚗 Garage/Dealership - Vehicle Management 🛠️

> [!NOTE]
> This **backend** project uses a **Database 💾** for the management of users and the garage.

## ✨ Core Functionalities
* ➕ Add and Delete Cars:** Manage the inventory by allowing the **addition** of new vehicles and the **deletion** of existing cars.
* 🔍 Advanced Search Functionality: Allows for quick vehicle search by filtering by the car _brand_.

## 🔑 Access Requirement and Security
⚠️ **Secure Access :** To protect the information and access the complete list of cars, it's **mandatory** to log in (**LOGIN**) or register as a new user in the application.

### 🛡️ Security and Data Persistence
For correct operation, the **Database (DB)** requires two main tables: `garaje` and `usuario`.

> [!NOTE]
> **Password Encryption:** Passwords are **securely** stored in the DB using the **`sha256`** **hash** function.

> **Algorithm Definition:** The available **hash** methods are defined and declared in a _array_ -> [HashAlgo.php](./assets/php/HashAlgo.php)
