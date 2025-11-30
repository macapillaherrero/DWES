IES CAMP DE MORVEDRE
Prof: <a href="mailto:ma.capillaherrero@edu.gva.es">ma.capillaherrero@edu.gva.es</a>

<div style="display:flex; align-items:center;">
  <img src="https://macapillaherrero.github.io/DWES/logos/europa.jpg" alt="Logo Europa" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/camp.png" style="height:64px;margin-right:32px">
  <img src="https://macapillaherrero.github.io/DWES/logos/LOGO_DAW_Pres.png" alt="Logo Daw" style="height:64px;margin-right:32px">
</div>

## Ejercicio práctico: Gestión de transferencias bancarias con DAO y transacciones

### Objetivo

Crear un DAO llamado `CuentaDAO` para gestionar cuentas bancarias en una base de datos, incluyendo métodos para consultar saldo, realizar depósitos y realizar transferencias seguras que usen transacciones para garantizar integridad.

### Base de datos

Tabla `cuentas` con estructura mínima:

```sql
CREATE TABLE cuentas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titular VARCHAR(100) NOT NULL,
  saldo DECIMAL(10,2) NOT NULL DEFAULT 0
);
```


### Tareas

1. Crear la clase `CuentaDAO` con un constructor que reciba o cree la conexión PDO.
2. Implementar el método `getSaldo($idCuenta)` que devuelva el saldo actual de la cuenta indicada.
3. Implementar el método `depositar($idCuenta, $cantidad)` que sume la cantidad indicada al saldo de la cuenta.
4. Implementar el método `transferir($idCuentaOrigen, $idCuentaDestino, $cantidad)` que realice la transferencia restando de la cuenta origen y sumando en la cuenta destino usando una transacción para garantizar que ambas operaciones sucedan como unidad.
5. Incluir manejo de errores con `try/catch` en `transferir`. En caso de error, debe hacer rollback y lanzar una excepción con un mensaje adecuado.
6. Probar el DAO con un script que cree una instancia de `CuentaDAO` y simule varias transferencias, mostrando resultados o errores.

### Recomendaciones

- Usar siempre `prepared statements` en las consultas para evitar inyección SQL.
- Controlar errores como intentar transferir más saldo del disponible.
- Si la transferencia no puede realizarse (saldo insuficiente, cuenta no existe), la transacción debe cancelarse completamente.
- Mostrar mensajes claros para cada caso (éxito, error por saldo, error de conexión, etc.).

***

<p>IES CAMP DE MORVEDRE</p>
<p>Prof: <a  href="mailto:ma.capillaherrero@edu.gva.es"> ma.capillaherrero@edu.gva.es</a></p>
