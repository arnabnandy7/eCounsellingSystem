Public Class delete
    Dim con As New OleDb.OleDbConnection
    Dim da As OleDb.OleDbDataAdapter
    Private Sub delete_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Me.ProductTableAdapter.Fill(Me.BillDataSourceDataSet3.Product)
        Dim Views As New DataTable
        Dim a As String = "PROVIDER=Microsoft.Jet.OleDb.4.0;"
        Dim b As String = "DATA SOURCE=C:\Users\arnab\Downloads\Bengali Billing System\Bengacount\BillDataSource.mdb"
        con.ConnectionString = a & b
        con.Open()
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim cmd As New OleDb.OleDbCommand
        'Dim a As String
        cmd.CommandText = "DELETE * FROM Bill"
        'MsgBox(cmd.CommandText)
        cmd.ExecuteNonQuery()
        'a = ComboBox1.Text & " তালিকার থেকে বাদ দেওয়া হল।"
        'MsgBox(a)
    End Sub
End Class