Public Class login_form
    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs)
        End
    End Sub
    Private Sub TextBox2_KeyPress(ByVal sender As Object, ByVal e As System.Windows.Forms.KeyPressEventArgs) Handles TextBox2.KeyPress
        If e.KeyChar = Chr(Keys.Enter) Then
            Button1_Click_1(AcceptButton, AcceptButton)
        End If
    End Sub
    Private Sub login_form_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        TextBox1.Clear()
        TextBox2.Clear()
    End Sub

    Private Sub Button3_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        TextBox1.Clear()
        TextBox2.Clear()
    End Sub

    Private Sub Button2_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Me.Visible = False
        MsgBox("ধন্যবাদ", MsgBoxStyle.Critical, "ধন্যবাদ")
    End Sub

    Private Sub Button1_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim Login = Me.CustomerTableAdapter.UsernamePasswordString(TextBox1.Text, TextBox2.Text)
        If Login Is Nothing Then
            MsgBox("Invalid username or password,try again!", vbOKCancel + vbExclamation, "Wrong Password Entry")
            Me.Show()
        Else
            loading.Show()
            Me.Hide()
        End If
    End Sub
End Class
