Imports MySql.Data.MySqlClient
Public Class Form1
    Dim hour As Date
    Dim day As Date = Today
    Dim d, m, y As Integer
    Dim ba As String
    Private Sub Timer1_Tick(sender As Object, e As EventArgs) Handles Timer1.Tick
        Me.Text = TimeOfDay
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim fil As Integer = 0
        Dim sql, num, name As String
        Dim cont As Integer
        conectar()
        hour = TimeOfDay
        y = Now.Year
        m = Now.Month
        d = Now.Day
        num = txt_nume.Text
        cont = txt_contra.Text
        Try
            sql = "select * from " & ba & "; insert into " & num & " values('" & DateString & "','" & hour & "','00:00:00')"
            Dim query As New MySqlCommand(sql, conexion)
            Dim reg As MySqlDataReader = Nothing
            reg = query.ExecuteReader()
            If reg.Read Then
                name = reg.GetString("nombre")
                fil = query.ExecuteNonQuery()
                MsgBox("**" & name & "Registro de entrada:" & vbNewLine & "Día: " & DateString & "     Hora: " & hour & "")
            End If
            reg.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
            MsgBox("Error")
        End Try
        desconectar()
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        hour = TimeOfDay
        y = Now.Year
        m = Now.Month
        d = Now.Day
        MsgBox("Registro de salida:" & vbNewLine & "Día: " & day & "     Hora: " & hour & "")
    End Sub

    Private Sub RadioButton1_Click(sender As Object, e As EventArgs) Handles RadioButton1.Click
        ba = "profesores"
    End Sub

    Private Sub RadioButton2_Click(sender As Object, e As EventArgs) Handles RadioButton2.Click
        ba = "apoyo"
    End Sub
End Class
