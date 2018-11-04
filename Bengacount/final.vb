Public Class final
    Dim con As New OleDb.OleDbConnection
    Dim da As OleDb.OleDbDataAdapter
    Dim ds As DataSet
    
    Private Sub final_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Label1.Visible = True
        Label7.Visible = False
        Label8.Visible = False
        Label9.Visible = False
        Me.BillTableAdapter.Fill(Me.BillDataSourceDataSet4.Bill)
        Dim Views As New DataTable
        Dim a As String = "PROVIDER=Microsoft.Jet.OleDb.4.0;"
        Dim b As String = "DATA SOURCE=C:\Users\arnab\Downloads\Bengali Billing System\Bengacount\BillDataSource.mdb"
        con.ConnectionString = a & b
        con.Open()
        Dim cmd As New OleDb.OleDbCommand
        cmd.Connection = con
        cmd.CommandText = "select sum(Price) from Bill"
        Dim result As Integer = cmd.ExecuteScalar
        Label10.Text = "মোট দাম " & result & " টাকা"
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim cmd As New OleDb.OleDbCommand
        Dim c, a As Integer
        Dim str As String
        cmd.Connection = con
        cmd.CommandText = "select sum(Price) from Bill"
        a = Val(TextBox1.Text)
        Dim result As Integer = cmd.ExecuteScalar
        Label10.Text = "মোট দাম " & result & " টাকা"
        c = result - a
        Label1.Text = "মোট দাম (ছাড় দিয়ে) " & c & " টাকা"
        str = DateTimePicker1.Text
        cmd.CommandText = "INSERT INTO Masterbill values('" & TextBox2.Text & "','" & TextBox3.Text & "'," & c & ",'" & str & "')"
        cmd.ExecuteNonQuery()
        TextBox2.Visible = False
        TextBox3.Visible = False
        DateTimePicker1.Visible = False
        Label7.Text = TextBox2.Text
        Label8.Text = TextBox3.Text
        Label9.Text = DateTimePicker1.Text
        Label7.Visible = True
        Label8.Visible = True
        Label9.Visible = True

    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        master.Show()
        Me.Hide()
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        Me.PrintForm1.PrintAction = Printing.PrintAction.PrintToPreview
        Me.PrintForm1.Print()
    End Sub
End Class