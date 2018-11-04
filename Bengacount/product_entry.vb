Imports System.Data.OleDb

Public Class product_entry
    Dim con As New OleDb.OleDbConnection
    Dim da As OleDb.OleDbDataAdapter

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        TextBox3.Clear()
        TextBox4.Clear()
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        master.Show()
        Me.Hide()
    End Sub

    Private Sub product_entry_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Me.StockTableAdapter.Fill(Me.BillDataSourceDataSet.stock)
        Me.ProductTableAdapter1.Fill(Me.BillDataSourceDataSet.Product)
        Me.ProductTableAdapter.Fill(Me.ProductDataSet.Product)
        Dim Views As New DataTable
        Dim a As String = "PROVIDER=Microsoft.Jet.OleDb.4.0;"
        Dim b As String = "DATA SOURCE=C:\Users\arnab\Downloads\Bengali Billing System\Bengacount\BillDataSource.mdb"
        con.ConnectionString = a & b
        con.Open()
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Dim cmd As New OleDb.OleDbCommand
        Dim x As Integer = Val(TextBox3.Text)
        Dim y As Integer = Val(TextBox4.Text)
        cmd.Connection = con
        cmd.CommandText = "UPDATE stock SET quantity=quantity+" & x & ", price=price+" & y & " WHERE productid=" & ComboBox1.Text & " and productname='" & ComboBox2.Text & "'"
        cmd.ExecuteNonQuery()
        If x < 0 And y < 0 Then
            MsgBox("পরিমাণ অথবা দামে ভুল রয়েছে।")
        ElseIf x > 0 And y > 0 Then
            Dim str1 As String
            str1 = "ভাণ্ডারের " & ComboBox2.Text & " দ্রব্যের পরিমাণ " & x & " টি/গ্রাম/লিটার/কি.গ্রা. এবং দাম " & y & " টাকা বাড়ানো হল।"
            MsgBox(str1)
        ElseIf x > 0 Then
            Dim str1 As String
            str1 = "ভাণ্ডারের " & ComboBox2.Text & " দ্রব্যের পরিমাণ " & x & " টি/গ্রাম/লিটার/কি.গ্রা. বাড়ানো হল।"
            MsgBox(str1)
        ElseIf y > 0 Then
            Dim str1 As String
            str1 = "ভাণ্ডারের " & ComboBox2.Text & " দ্রব্যের দাম " & y & " টাকা বাড়ানো হল।"
            MsgBox(str1)
        End If
    End Sub
End Class