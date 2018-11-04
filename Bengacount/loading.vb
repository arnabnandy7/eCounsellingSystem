Public Class loading

    Private Sub loading_GotFocus(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.GotFocus
        PictureBox1.Image = My.Resources.ajaxloader
        PictureBox1.Visible = True
        Timer1.Enabled = True
    End Sub

    Private Sub loading_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub

    Private Sub Timer1_Tick(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Timer1.Tick
        Timer1.Enabled = False
        Me.Visible = False
        master.Visible = True
    End Sub

    Private Sub loading_VisibleChanged(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.VisibleChanged
        PictureBox1.Image = My.Resources.ajaxloader
        PictureBox1.Visible = True
        Timer1.Enabled = False
    End Sub
End Class