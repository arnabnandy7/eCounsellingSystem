Public Class selling
    Dim con As New OleDb.OleDbConnection
    Dim da As OleDb.OleDbDataAdapter
    Dim ds As DataSet
    Private Sub selling_FormClosed(ByVal sender As Object, ByVal e As System.Windows.Forms.FormClosedEventArgs) Handles Me.FormClosed
        Me.Dispose()
        Me.Close()
        master.Show()
    End Sub

    Private Sub selling_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Me.BillTableAdapter3.Fill(Me.BillDataSourceDataSet4.Bill)
        Me.StockTableAdapter.Fill(Me.BillDataSourceDataSet3.stock)
        Me.UnitTableAdapter.Fill(Me.BillDataSourceDataSet2.unit)
        ComboBox2.Visible = False
        ComboBox3.Visible = False
        ComboBox4.Visible = False
        ComboBox5.Visible = False
        Label2.Visible = False
        TextBox1.Visible = False
        Dim a As String = "PROVIDER=Microsoft.Jet.OleDb.4.0;"
        Dim b As String = "DATA SOURCE=C:\Users\arnab\Downloads\Bengali Billing System\Bengacount\BillDataSource.mdb"
        con.ConnectionString = a & b
        con.Open()
    End Sub

    Private Sub ComboBox1_GotFocus(ByVal sender As Object, ByVal e As System.EventArgs) Handles ComboBox1.GotFocus
        ComboBox1.BackColor = Color.LightYellow
    End Sub

    Private Sub ComboBox1_SelectedIndexChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles ComboBox1.SelectedIndexChanged
        If Me.ComboBox1.SelectedIndex = Me.ComboBox1.Items.Count - 3 Then
            ComboBox2.Visible = True
            ComboBox2.BackColor = Color.LightSteelBlue
            ComboBox3.Visible = False
            ComboBox4.Visible = False
            ComboBox5.Visible = True
            Label2.Visible = True
            TextBox1.Visible = True

        ElseIf Me.ComboBox1.SelectedIndex = Me.ComboBox1.Items.Count - 2 Then
            ComboBox3.Visible = True
            ComboBox3.BackColor = Color.LightSteelBlue
            ComboBox2.Visible = False
            ComboBox4.Visible = False
            ComboBox5.Visible = True
            Label2.Visible = True
            TextBox1.Visible = True
        Else
            ComboBox4.Visible = True
            ComboBox4.BackColor = Color.LightSteelBlue
            ComboBox3.Visible = False
            ComboBox2.Visible = False
            ComboBox5.Visible = True
            Label2.Visible = True
            TextBox1.Visible = True

        End If
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        'Form2.Show()
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        final.Show()
        Me.Hide()
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        master.Show()
        Me.Hide()
    End Sub
    Private Sub Button4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button4.Click
        Dim a As Integer
        Dim b As Integer
        Dim str1 As String
        a = Val(TextBox1.Text)
        Dim cmd As New OleDb.OleDbCommand
        cmd.Connection = con
        If a < 0 Then
            MsgBox("পরিমাণে ভুল রয়েছে।")
            Exit Sub
        End If
        If ComboBox2.Visible = True Then
            cmd.CommandText = "select quantity from stock where productname='" & ComboBox2.Text & "'"
            Dim t As Integer = cmd.ExecuteScalar
            If t > 0 Then
                cmd.CommandText = "select " & a & "*convunits*price from stock,unit where productname='" & ComboBox2.Text & "' and units='" & ComboBox5.Text & "'"
                Dim result As Integer = cmd.ExecuteScalar
                b = result
                cmd.CommandText = "INSERT INTO bill values('" & ComboBox2.Text & "'," & a & "," & b & ")"
                cmd.ExecuteNonQuery()
                cmd.CommandText = "UPDATE stock SET quantity=quantity-" & a & " WHERE productname='" & ComboBox2.Text & "'"
                cmd.ExecuteNonQuery()
                str1 = "তালিকায় " & ComboBox2.Text & " দ্রব্যটি " & a & " টি/গ্রাম/লিটার/কি.গ্রা. যুক্ত হল এবং দাম " & b & " টাকা ।"
                MsgBox(str1)
            Else
                Dim str As String
                str = "তালিকায় দ্রব্যটি যথেষ্ট পরিমাণে নেই দয়া করে অন্য দ্রব্য তালিকাভুক্ত করুন।"
                MsgBox(str)
            End If
        End If
        If ComboBox3.Visible = True Then
            cmd.CommandText = "select quantity from stock where productname='" & ComboBox3.Text & "'"
            Dim t As Integer = cmd.ExecuteScalar
            If t > 0 Then
                cmd.CommandText = "select " & a & "*convunits*price from stock,unit where productname='" & ComboBox3.Text & "' and units='" & ComboBox5.Text & "'"
                Dim result As Integer = cmd.ExecuteScalar
                b = result
                cmd.CommandText = "INSERT INTO bill values('" & ComboBox3.Text & "'," & a & "," & b & ")"
                cmd.ExecuteNonQuery()
                cmd.CommandText = "UPDATE stock SET quantity=quantity-" & a & " WHERE productname='" & ComboBox3.Text & "'"
                cmd.ExecuteNonQuery()
                str1 = "তালিকায় " & ComboBox3.Text & " দ্রব্যটি " & a & " টি/গ্রাম/লিটার/কি.গ্রা. যুক্ত হল এবং দাম " & b & " টাকা ।"
                MsgBox(str1)
            ElseIf t < 0 Then
                Dim str As String
                str = "তালিকায় দ্রব্যটি যথেষ্ট পরিমাণে নেই দয়া করে অন্য দ্রব্য তালিকাভুক্ত করুন।"
                MsgBox(str)
            End If
        End If
        If ComboBox4.Visible = True Then
            cmd.CommandText = "select quantity from stock where productname='" & ComboBox4.Text & "'"
            Dim t As Integer = cmd.ExecuteScalar
            If t > 0 Then
                cmd.CommandText = "select " & a & "*convunits*price from stock,unit where productname='" & ComboBox4.Text & "' and units='" & ComboBox5.Text & "'"
                Dim result As Integer = cmd.ExecuteScalar
                b = result
                cmd.CommandText = "INSERT INTO bill values('" & ComboBox4.Text & "'," & a & "," & b & ")"
                cmd.ExecuteNonQuery()
                cmd.CommandText = "UPDATE stock SET quantity=quantity-" & a & " WHERE productname='" & ComboBox4.Text & "'"
                cmd.ExecuteNonQuery()
                str1 = "তালিকায় " & ComboBox4.Text & " দ্রব্যটি " & a & " টি/গ্রাম/লিটার/কি.গ্রা. যুক্ত হল এবং দাম " & b & " টাকা ।"
                MsgBox(str1)
            ElseIf t < 0 Then
                Dim str As String
                str = "তালিকায় দ্রব্যটি যথেষ্ট পরিমাণে নেই দয়া করে অন্য দ্রব্য তালিকাভুক্ত করুন।"
                MsgBox(str)
            End If
        End If
    End Sub

    Private Sub Button5_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button5.Click
        master.Show()
        Me.Hide()
    End Sub
End Class

