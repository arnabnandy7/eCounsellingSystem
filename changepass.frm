VERSION 5.00
Begin VB.Form changepass 
   Caption         =   "Change Password"
   ClientHeight    =   3090
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   4680
   LinkTopic       =   "Form1"
   ScaleHeight     =   3090
   ScaleWidth      =   4680
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton cmdExit 
      Caption         =   "E&xit"
      Height          =   495
      Left            =   2880
      TabIndex        =   5
      Top             =   2280
      Width           =   1335
   End
   Begin VB.CommandButton cmdChange 
      Caption         =   "&Change"
      Height          =   495
      Left            =   1200
      TabIndex        =   4
      Top             =   2280
      Width           =   1455
   End
   Begin VB.TextBox txtOldpass 
      Height          =   375
      Left            =   1920
      TabIndex        =   3
      Top             =   480
      Width           =   2535
   End
   Begin VB.TextBox txtNewpass 
      Height          =   375
      Left            =   1920
      TabIndex        =   0
      Top             =   1320
      Width           =   2535
   End
   Begin VB.Label Label2 
      Caption         =   "Your old password is"
      Height          =   255
      Left            =   120
      TabIndex        =   2
      Top             =   480
      Width           =   1695
   End
   Begin VB.Label Label1 
      Caption         =   "Enter new password"
      Height          =   255
      Left            =   120
      TabIndex        =   1
      Top             =   1320
      Width           =   1935
   End
End
Attribute VB_Name = "changepass"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdChange_Click()
Dim psword As String
psword = txtOldpass.Text
Do Until Register.Adodc1.Recordset.EOF = False
 If Userlist.Adodc1.Recordset.Fields("Password").Value = psword Then
        txtOldpass.Text = Userlist.Adodc1.Recordset.Fields("Password").Value
        Userlist.Adodc1.Recordset.Fields("Password") = txtNewpass.Text
 Else
 Register.Adodc1.Recordset.MoveNext
 End If
Loop
End Sub

Private Sub cmdExit_Click()
Unload Me
End Sub
