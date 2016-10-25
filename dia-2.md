
**Conceptos:**
Sharding: Particionado de tablas muy grandes en tablas más pequeñas.

Replica: Una copia de los datos de una RAM de un Nodo en la RAM de otro

Persistencia: La copia en disco duro de los datos de un Nodo.

**Soluciones de los SGBDR**

*Performance*
Añadir capa de cache (memcached) para almacenar indices.

*Flexibilidad*
Añadir binarios o xml en la tabla. (BLOB)

*Escalabilidad (volumen)*
Sharding

**Soluciones Couchbase**

*Perfomance*
Memory-first solution

*Escalabilidad*
Montados tipo cluster con replicación. Un mínimo de 4 maquinas (4 nodos)

*Flexibilidad*
Los datos son tipo JSON 

> **¿Como solucionamos que no se pierdan los datos de memoria RAM si hay un fallo?**
> 
> Mediante la replicación, Couchbase requiere 4 nodos para solucionar
> esto. Si uno falla, lo duplica en uno de los otros nodos.

**Modelos de datos que almacena Couchbase**

Key-value - Parejas clave valor serializados
Documentos - Tipo JSON con datos estructurados
Columnas de datos
Grafos

**Teorema CAP**

Consistencia  -> Los datos de todos los Nodos (Honkong y Londres) son los mismos en tiempo real.
Disponibilidad -> Los datos siempre estan disponibles
Tolerancia a la partición -> Permite distribuir la información en varios Nodos. (Cloud)
