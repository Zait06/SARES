Imports MySql.Data.MySqlClient
Module Module1
    Public conexion As MySqlConnection
    Public servidor As String = "localhost"
    Public baseDatos As String = "SARES"
    Public usuario As String = "root"
    Public password As String = ""
    Public Sub conectar()
        conexion = New MySqlConnection()
        Try
            conexion.ConnectionString = "Server=" & servidor & "; Database=" & baseDatos & "; Uid=" & usuario & "; Pwd=" & password
            conexion.Open()
            MessageBox.Show(" se ha conectado")
        Catch ex As Exception
            MessageBox.Show("No se puede conectar al servidor " & ex.Message)
        End Try
    End Sub
    Public Sub desconectar()
        Try
            If conexion.State = ConnectionState.Open Then
                conexion.Close()
                conexion.Dispose()
                MessageBox.Show(" se ha desconectado")
            End If
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        End Try
    End Sub
End Module
