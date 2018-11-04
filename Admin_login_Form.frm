VERSION 5.00
Begin VB.Form Admin_login_Form 
   Caption         =   "Admin Log In"
   ClientHeight    =   3090
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   5205
   LinkTopic       =   "Form1"
   ScaleHeight     =   3090
   ScaleWidth      =   5205
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton cmdLogin 
      Caption         =   "Login"
      Height          =   615
      Left            =   1800
      TabIndex        =   4
      Top             =   2040
      Width           =   1455
   End
   Begin VB.TextBox txtpassword 
      Height          =   405
      Left            =   1920
      TabIndex        =   3
      Top             =   1200
      Width           =   3015
   End
   Begin VB.TextBox txtName 
      Height          =   375
      Left            =   1920
      TabIndex        =   2
      Top             =   480
      Width           =   3015
   End
   Begin VB.Label Label2 
      Caption         =   "          Password:"
      Height          =   375
      Left            =   0
      TabIndex        =   1
      Top             =   1200
      Width           =   1695
   End
   Begin VB.Label Label1 
      Caption         =   "         Username:"
      Height          =   255
      Left            =   0
      TabIndex        =   0
      Top             =   600
      Width           =   1695
   End
End
Attribute VB_Name = "Admin_login_Form"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdLogin_Click()
Dim msg As String

Else
 Loop
 msg = MsgBox("Invalid password, try again!", vbOKCancel)
 If (msg = 1) Then
 Login_form.Show
 txtName.Text = " "
 txtpassword = " "
 Else
 End
 End If
End If
End Sub
