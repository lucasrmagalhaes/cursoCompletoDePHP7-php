[SQL Server 2019](https://www.microsoft.com/pt-br/sql-server/sql-server-2019)

[SQL Server Management Studio (SSMS)](https://docs.microsoft.com/pt-br/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-2017)

[PHP SQL DLL](https://github.com/microsoft/msphpsql/releases)

```
C:\xampp\php\ext
```

```
extension=php_pdo_sqlsrv_74_nts.dll
extension=php_pdo_sqlsrv_74_ts.dll
extension=php_sqlsrv_74_nts.dll
extension=php_sqlsrv_74_ts.dll
```

```
CREATE TABLE tb_usuarios (
    idusuario INT NOT NULL IDENTITY PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
);
```

```
SELECT * FROM tb_usuarios;
```

```
INSERT INTO tb_usuarios(deslogin, dessenha) VALUES('root', '!@#$%');
```