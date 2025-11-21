.IES CAMP DE MORVEDRE
Prof: <a href="mailto:ma.capillaherrero@edu.gva.es">ma.capillaherrero@edu.gva.es</a>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>

---

## 🧑‍💻 Ejercicios propuestos

1. Crea una base de datos llamada **empresa** y una tabla **empleados** con los campos:

   - `id` (autoincremento, clave primaria)
   - `nombre` (varchar)
   - `email` (varchar, único)
   - `salario` (decimal o float)
     Inserta varios empleados con diferentes salarios.
2. Haz un **formulario** para añadir empleados y otro para **buscar los empleados cuyo salario es mayor que una cantidad dada**, mostrando los resultados en pantalla.
3. Amplía el proyecto para **actualizar el email o el salario de un empleado concreto** (por su id) y para **borrar empleados**.
4. Haz que el acceso a operaciones de **borrado y actualización** requiera una **contraseña de administrador** que compares con `password_verify` en la base de datos.
5. **Extra:** Redacta una función reutilizable `conexionPDO($nombreBD)` que devuelva el objeto de conexión PDO listo (con gestión de errores adecuada).

---

### ✏️ Criterios de evaluación

| Ejercicio | RA | Criterios de evaluación |
|-----------|----|------------------------|
| Crear BD empresa y tabla empleados con campos y datos | RA6 | b) Se han creado aplicaciones que establezcan conexiones con bases de datos;<br>g) Se han probado y documentado las aplicaciones web. |
| Formulario para añadir empleados y buscar por salario | RA6 | b) Se han creado aplicaciones que establezcan conexiones con bases de datos;<br>c) Se ha recuperado información almacenada en bases de datos;<br>d) Se ha publicado en aplicaciones web la información recuperada;<br>f) Se han creado aplicaciones web que permitan la actualización y la eliminación de información disponible en una base de datos;<br>g) Se han probado y documentado las aplicaciones web. |
| Actualizar/borrar empleados por id | RA6 | f) Se han creado aplicaciones web que permitan la actualización y la eliminación de información disponible en una base de datos;<br>g) Se han probado y documentado las aplicaciones web. |
| Borrado/actualización solo con contraseña admin y password_verify | RA4 | d) Se han identificado y caracterizado los mecanismos disponibles para la autentificación de usuarios;<br>e) Se han escrito aplicaciones que integren mecanismos de autentificación de usuarios. |
| Función reutilizable conexionPDO($nombreBD) con gestión de errores | RA6 | b) Se han creado aplicaciones que establezcan conexiones con bases de datos;<br>g) Se han probado y documentado las aplicaciones web. |

---

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p

