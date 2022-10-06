--
-- Definition for stored procedure SP_AUMENTAR_CLICK_PUBLICIDAD : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
CREATE PROCEDURE [dbo].[SP_AUMENTAR_CLICK_PUBLICIDAD] @id varchar(3) AS BEGIN
UPDATE [dbo].[publicidad]
SET [click] = [click]+1
WHERE  [id] = @id
END
GO

--
-- Definition for stored procedure SP_AUMENTAR_CLICK_RUBRO : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
CREATE PROCEDURE [dbo].[SP_AUMENTAR_CLICK_RUBRO] @id varchar(3) AS BEGIN
UPDATE [dbo].[rubro]
SET [click] = [click]+1
WHERE  [id] = @id
END
GO

--
-- Definition for stored procedure SP_BUSQUEDA_FALLIDA : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
CREATE PROCEDURE [dbo].[SP_BUSQUEDA_FALLIDA] @busqueda varchar(100) AS BEGIN
	INSERT INTO [dbo].[busqueda_fallida](
           [busqueda], [created_at] )
     VALUES
           (@busqueda, getdate() )
END
GO

--
-- Definition for stored procedure SP_OBTENER_CONCEPTOS : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_CONCEPTOS] AS BEGIN
SELECT [id]
      ,[descripcion]
      ,[imagen]
      ,[click]
      ,[slug]
      ,[tag]
  FROM [dbo].[detalle_concepto]
  WHERE [estado] = 'true'
END
GO

--
-- Definition for stored procedure SP_OBTENER_ENTIDADES : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_ENTIDADES] AS BEGIN
SELECT [id]
      ,[nombre_entidad]
      ,[created_at]
      ,[updated_at]
  FROM [dbo].[entidad]
  WHERE [ID] <> 1
END
GO

--
-- Definition for stored procedure SP_OBTENER_NOMBRE_CUENTA : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_NOMBRE_CUENTA] @estado varchar(30) AS BEGIN
SELECT C.[id],
    C.[nombre_cuenta]
FROM [dbo].[cuenta] AS C
WHERE C.estado = @estado
ORDER BY C.[nombre_cuenta] ASC
END
GO

--
-- Definition for stored procedure SP_OBTENER_PORTADAS : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_PORTADAS] @ubicacion varchar(30) AS BEGIN
SELECT [id]
      ,[descripcion]
      ,[imagen]
      ,[ubicacion]
      ,[created_at]
      ,[updated_at]
  FROM [dbo].[portada]
WHERE @ubicacion = [ubicacion]
END
GO

--
-- Definition for stored procedure SP_OBTENER_PUBLICIDAD : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
CREATE PROCEDURE [dbo].[SP_OBTENER_PUBLICIDAD] AS BEGIN
SELECT [id]
      ,[descripcion]
      ,[imagen]
      ,[click]
      ,[created_at]
      ,[updated_at]
  FROM [dbo].[publicidad]
END
GO

--
-- Definition for stored procedure SP_OBTENER_RUBROS : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Author:		<César Martínez>
    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_RUBROS] AS BEGIN
SELECT R.[id],
    R.[nombre_rubro],
    R.[slug],
    R.[imagen],
    R.[click],
    R.[tag],
    R.[estado],
    R.[id_categoria],
    R.[created_at],
    R.[updated_at]
FROM [dbo].[rubro] AS R
WHERE R.[estado] = 'true' AND (SELECT COUNT(S.[id_rubro])
        FROM servicio AS S
        WHERE S.[id_rubro] = R.[id]) > 0
ORDER BY R.[nombre_rubro]
END
GO

--
-- Definition for stored procedure SP_OBTENER_RUBROS_CONCEPTO : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_RUBROS_CONCEPTO] @id_concepto varchar(30) AS BEGIN
SELECT R.[id],
    R.[nombre_rubro],
    R.[slug],
    R.[imagen],
    R.[click],
    R.[tag],
	0 As checked,
    R.[estado],
    R.[id_categoria],
    R.[created_at],
    R.[updated_at]
FROM [dbo].[rubro] AS R
WHERE R.[estado] = 'true' AND (
        SELECT COUNT(S.[id_rubro])
        FROM servicio AS S
        WHERE S.[id_rubro] = R.[id] AND ( SELECT COUNT(C.[id_cuenta]) FROM concepto AS C
										  INNER JOIN detalle_concepto AS DC ON C.[id_detalle_concepto] = DC.[id]
										  WHERE C.[id_cuenta] = S.[id_cuenta] AND DC.[slug] = @id_concepto) > 0 
    ) > 0 

ORDER BY R.[nombre_rubro] ASC

END
GO

--
-- Definition for stored procedure SP_OBTENER_RUBROS_DESTACADOS : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Author:		<César Martínez>
    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_RUBROS_DESTACADOS] AS BEGIN
SELECT TOP 6 R.[id],
    R.[nombre_rubro],
    R.[slug],
    R.[imagen],
    R.[click],
    R.[tag],
    R.[estado],
    R.[id_categoria],
    R.[created_at],
    R.[updated_at]
FROM [dbo].[rubro] AS R
WHERE R.[estado] = 'true' AND ( R.[id_categoria] =1 ) AND (
        SELECT COUNT(S.[id_rubro])
        FROM servicio AS S
        WHERE S.[id_rubro] = R.[id]
    ) > 0

UNION

SELECT TOP 6 R.[id],
    R.[nombre_rubro],
    R.[slug],
    R.[imagen],
    R.[click],
    R.[tag],
    R.[estado],
    R.[id_categoria],
    R.[created_at],
    R.[updated_at]
FROM [dbo].[rubro] AS R
WHERE R.[estado] = 'true' AND ( R.[id_categoria] =2 ) AND (
        SELECT COUNT(S.[id_rubro])
        FROM servicio AS S
        WHERE S.[id_rubro] = R.[id]
    ) > 0

ORDER BY R.[id_categoria], R.[click] DESC

END
GO

--
-- Definition for stored procedure SP_OBTENER_RUBROS_PARA_REGISTRARSE : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_RUBROS_PARA_REGISTRARSE] @id_categoria varchar(1) AS BEGIN
SELECT [id],
    [nombre_rubro],
    [slug],
    [imagen],
    [click],
    [tag],
    [estado],
    [id_categoria],
    [created_at],
    [updated_at]
FROM [dbo].[rubro]
WHERE [estado] = 'true' AND [id_categoria] = @id_categoria
ORDER BY [nombre_rubro] ASC
END
GO

--
-- Definition for stored procedure SP_OBTENER_RUBROS_POR_CATEGORIA : 
--
GO
SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
GO

    -- Author:		<César Martínez>
    -- Create date: <16 de septiembre de 2022>
    -- Description:	<Procedimiento almacenado que retorna los rubros de una categoria especifica que tengan al menos una cuenta registrada>
    -- =============================================
CREATE PROCEDURE [dbo].[SP_OBTENER_RUBROS_POR_CATEGORIA] @slug varchar(30) AS BEGIN
SELECT R.[id],
    R.[nombre_rubro],
    R.[slug],
    R.[imagen],
    R.[click],
    R.[tag],
    R.[estado],
    R.[id_categoria],
    R.[created_at],
    R.[updated_at]
FROM [dbo].[rubro] AS R
INNER JOIN categoria AS C ON C.[id] = R.[id_categoria]
WHERE R.[estado] = 'true' AND C.[slug] = @slug AND (
        SELECT COUNT(S.[id_rubro])
        FROM servicio AS S
        WHERE S.[id_rubro] = R.[id]
    ) > 0
ORDER BY R.[nombre_rubro]
END
GO