Public Class Form2

    Private Sub BillBindingNavigatorSaveItem_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles BillBindingNavigatorSaveItem.Click
        Validate()
        BillBindingSource.EndEdit()
        TableAdapterManager.UpdateAll(Me.BillDataSourceDataSet4)
    End Sub

    Private Sub Form2_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        'TODO: This line of code loads data into the 'BillDataSourceDataSet4.Bill' table. You can move, or remove it, as needed.
        Me.BillTableAdapter.Fill(Me.BillDataSourceDataSet4.Bill)

    End Sub

    Private Sub BindingNavigatorDeleteItem_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles BindingNavigatorDeleteItem.Click

    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        Me.Hide()
    End Sub
End Class